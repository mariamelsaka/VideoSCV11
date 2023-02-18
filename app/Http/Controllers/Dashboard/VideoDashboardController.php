<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VideoDashboardController extends Controller
{
    //

    public function addvideoview(){

        $videos=Video::all();
        $users=User::all();
        return view('dashboard.AddVideo',compact('videos'),compact('users'));
    }

    public function DoAdd_video(Request $request){
        $rules=[
            'video_title'=>'required',
            'ContentCreatorName'=>'',
            'video_url'=>'',
        ];
        $data=$request->all();
        $validator=Validator::make($data,$rules);
        if($validator->fails()){
            return redirect('admin/addvideo')->withInput($data)->withErrors($validator->errors());
        }
        $newUser=new Video();
        $newUser->video_title=$data["video_title"];
        $newUser->ContentCreatorName=$data["ContentCreatorName"];
        $newUser->video_url=$data["video_url"];

        $newUser->save();
        return redirect('admin/editvideos')->with(["success"=>"Registered Success"]);

    }


    public function viewvideos(){
        $videos=Video::paginate(5);
        $users=User::all();
        return view('dashboard.EditVideos',compact('videos'),compact('users'));
    }

    public function editvideo($id)
    {
        $video= Video::find($id);
        $users=User::all();
        return view('dashboard.edit_video', compact('video'),compact('users'));
    }
    public function editvideoview()
    {
        $users=User::all();
        return view('dashboard.edit_video',compact('users'));
    }

    public function video_update(Request $request, $id)
    {
        $blog = Video::find($id);
        $blog->video_title = $request->input('video_title');
        $blog->ContentCreatorName = $request->input('ContentCreatorName');
        $blog->video_url = $request->input('video_url');
        $blog->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

//    public function delete_blog(Request $request)
//    {
//        $blogId = $request->get('id', false);
//        $todelete = DB::select('select '.$blogId.' from blogs');
//        $todelete -> delete();
//        return redirect('dashboard.EditBlogs');
//    }

    public function delete_video($id) {
        DB::delete('delete from videos where id = ?',[$id]);

        echo "Record deleted successfully.<br/>";
        echo '<a href = "admin/editvideos">Click Here</a> to go back.';
    }

}
