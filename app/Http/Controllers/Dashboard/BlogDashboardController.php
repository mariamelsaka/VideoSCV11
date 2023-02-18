<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogDashboardController extends Controller
{
    //

    public function addblogview(){

        $blogs=Blog::all();
        $users=User::all();
        return view('dashboard.AddBlog',compact('blogs'),compact('users'));
    }

    public function DoAdd_blog(Request $request){
                $requestData = $request->all();
                $fileName = time().$request->file('blog_img')->getClientOriginalName();
                $path = $request->file('blog_img')->storeAs('images', $fileName, 'public');
                $requestData["blog_img"] = '/storage/'.$path;
                Blog::create($requestData);
            return redirect('admin/editblogs')->with(["success" => "Registered Success"]);

    }


    public function viewblogs(){
        $blogs=Blog::paginate(5);
        $users=User::all();
        return view('dashboard.EditBlogs',compact('blogs'),compact('users'));
    }


    public function editblog($id)
    {
        $blog = Blog::find($id);
        $users=User::all();
        return view('dashboard.edit_blog', compact('blog'),compact('users'));
    }

    public function blog_update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->blog_iframe = $request->input('blog_iframe');
        $blog->blog_img = $request->input('blog_img');
        $blog->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }


    public function delete_blog($id) {
        DB::delete('delete from blogs where id = ?',[$id]);

        echo "Record deleted successfully.<br/>";
        echo '<a href = "admin/editblogs">Click Here</a> to go back.';
    }

}
