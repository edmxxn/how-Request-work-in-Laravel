<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\post;

class PostController extends Controller
{
    //
    public function GetPostData ()
    {
        $post = Post::all();

        return response()->json($post);
    }
    public function StorePostData(Request $request)
    {
        // $posttext = $request->post_text;

        // $store  = Post::create([
        //     'post_text' => $posttext
        // ]);

        // return response()->json([
        //     'status' => 'success',
        //     'data' => $store
        // ]);

        $input = $request->validate([
            'post_text' => 'required|string'
        ]);

        $store = Post::create($input);

        return response()->json($store);
    }
    public function UpdatePostData(Request $request, $id)
    {  
        // $postid = '1';
        // $postUpdate = 'KONTOL BAPAK KAU PECAH';

        // $update = Post::where('id', $postid)
        //                 ->update(['post_text' => $postUpdate]);

        // return response()->json([
        //     'status' => 'update success',
        //     'data' => $update
        // ]);

        $data = Post::FindOrFail($id);

        $input = $request->validate([
            'post_text' => 'required|string'
        ]);

        $data->update($input);

        return response()->json($data);
    }
    public function DeletePostData(Request $request, $id)
    {
        // $postid = '1';
        
        // $destroy = Post::where('id', $postid);
        // $destroy->delete();

        // return response()->json([
        //     'status' => 'KOK ILANG?'
        // ]);


        $valid = Post::FindOrFail($id);

        $destroy = Post::where('id', $id);
        $valid->delete();

        return response()->json([
            'status' => 'Data has been terminated'
        ]);
    }
    public function AutoGenerate(Int $number)
    {
        foreach(range(1, $number) as $index)
        {
            $postString = Str::random(10);

            Post::create([
                'post_text' => $postString,
            ]);
        }
        return response()->json([
            'Status' => 'Data has been Generated',
            'Number of Data' => $number,
        ]);
    }
}