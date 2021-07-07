<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\skelbimas;
use App\models\komentaras;
use App\models\juodasis_sarasas;
use Illuminate\Support\Str;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= skelbimas::paginate(3);
        return view('ruddit.posts')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= skelbimas::find($id);
        return view('ruddit.content')->with('post',$post)->with('komentarai',$post->komentarai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sar=juodasis_sarasas::all();
        $sarasas=$sar->toArray();

        $collection=collect($sarasas);
        $array=$collection->pluck('zodis');
       
        //dd($request->all());
     // komentaras::update($request->all());
      $komentaroNr=komentaras::findOrFail($request->komentaroNr);
      $contains=Str::contains($request->input('tekstas'),$array->all());
      //  dd($request->all());
      if(empty($contains)){
      $komentaroNr->update($request->all());
      return back()->with('response','Redagavimas sekmingas!');;
      }
      else{
        return back()->with('responsew','Redagavimas nesekmingas!');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = komentaras::findOrFail($id);
        $post->delete();
        return back()->with('response','Komentaras sėkmingai pašalintas!');
    }
    public function comment(Request $request, $post_skelbimoNr){
        $this ->validate($request,[
            'comment' => 'required'
        ]);
        $sar=juodasis_sarasas::all();
        $sarasas=$sar->toArray();
        $comment=new komentaras;
        $comment->tekstas=$request->input('comment');
        $comment->fk_SkelbimasskelbimoNr=$post_skelbimoNr;
        $comment->fk_Naudotojasid=1;
        $comment->ivertinimu_skaicius=0;
        
        $collection=collect($sarasas);
        $array=$collection->pluck('zodis');
        $contains=Str::contains($comment->tekstas,$array->all());
        if(empty($contains)){
        $comment->save();
        return redirect("/posts/$post_skelbimoNr")->with('response','Komentaras sėkmingai pridėtas!');
        }
        else{
            return redirect("/posts/$post_skelbimoNr")->with('responsew','Komentaras neatitinka etikos!');
        }
    }
    public function like($id,$ids){
      $post = komentaras::findOrFail($ids);
      
      $cnt= $post->ivertinimu_skaicius;
      $cnt =$cnt+1;
      $post->ivertinimu_skaicius=$cnt;
      $post->save();
      return redirect("/posts/$id")->with('response','Komentaras sėkmingai palaikintas!');
    }
    
}
