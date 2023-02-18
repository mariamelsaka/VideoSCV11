<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Podcast;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class PodcastDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addpodcastview(){

        $podcasts=Podcast::all();
        $users=User::all();
        return view('dashboard.AddPodcast',compact('podcasts'),compact('users'));
    }

    public function DoAdd_podcast(Request $request){
                $requestData = $request->all();
                $fileName = time().$request->file('podcast_img')->getClientOriginalName();
                $path = $request->file('podcast_img')->storeAs('images', $fileName, 'public');
                $requestData["podcast_img"] = '/storage/'.$path;
                Podcast::create($requestData);
            return redirect('admin/editpodcasts')->with(["success" => "Registered Success"]);
//        }
    }


    public function viewpodcasts(){
        $podcasts=Podcast::paginate(5);
        $users=User::all();
        return view('dashboard.EditPodcasts',compact('podcasts'),compact('users'));
    }

    public function editpodcast($id)
    {
        $podcast = Podcast::find($id);
        $users=User::all();
        return view('dashboard.edit_podcast', compact('podcast'),compact('users'));
    }

    public function podcast_update(Request $request, $id)
    {
        $podcast = Podcast::find($id);
        $podcast->podcast_title = $request->input('podcast_title');
        $podcast->podcast_img = $request->input('podcast_img');
        $podcast->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }


    public function delete_podcast($id) {
        DB::delete('delete from podcasts where id = ?',[$id]);

        echo "Record deleted successfully.<br/>";
        echo '<a href = "admin/editpodcasts">Click Here</a> to go back.';
    }

    public function index()
    {
        //
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
