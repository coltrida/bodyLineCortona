<?php


namespace App\Services;

use App\Models\Post;
use Storage;
use function dd;

class PostService
{
    public function nonInEvidenza()
    {
        return Post::whereNull('evidenza')->latest()->simplePaginate(5);
    }

    public function ultimeQuattro()
    {
        return Post::latest()->take(4)->get();
    }

    public function lista()
    {
        return Post::latest()->simplePaginate(3);
    }

    public function inEvidenza()
    {
        return Post::where('evidenza', 1)->latest()->take(3)->get();
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function evidenza($id)
    {
        $post = Post::find($id);
        if ($post->evidenza == 1){
            $post->evidenza = null;
        } else {
            $post->evidenza = 1;
        }
        $post->save();
    }

    public function landing($id)
    {
        $post = Post::find($id);
        if ($post->landing == 1){
            $post->landing = null;
        } else {
            $post->landing = 1;
        }
        $post->save();
    }

    public function elimina($id)
    {
        $post = Post::find($id);
        if ($post->foto){
            Storage::disk('public')->delete('notizie/'.$post->foto);
        }
        $post->delete();
    }

    public function aggiungi($request)
    {
        $post = new Post();
        $post->titolo = $request->titolo;
        $post->evidenza = $request->evidenza;
        $post->testo = $request->testo;
        $post->save();

        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = $post->id . '.' . $file->extension();
            //$file->storeAs('public/notizie/', $filename);
            Storage::disk('public')->putFileAs('/notizie', $file, $filename);
            $post->foto = $filename;
            $post->save();
        }
    }

    public function hasLanding()
    {
        return Post::whereNotNull('landing')->get();
    }
}
