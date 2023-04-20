<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;
use App\Models\Tintuc;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Pagecontroller extends Controller
{   
    // public function _construct()
    // {
    //     $theloai = Theloai::all();
    //     view()->share('theloai', $theloai);
    // }

    public function getTrangChu()
    {
        return view("frontend.pages.trangchu");
    }

    public function getLienHe()
    {
        return view("frontend.pages.lienhe");
    }

    public function getGioiThieu()
    {
        return view("frontend.pages.gioithieu");
    }

    public function getLoaiTin($id)
    {
        $loaitin = Loaitin::find($id);
        $tintuc = Tintuc::where("idLoaiTin", $id)->paginate(5);
        return view("frontend.pages.loaitin", compact("loaitin", "tintuc"));
    }

    public function getTinTuc($id)
    {
        $tintuc = Tintuc::find($id);
        $tinnoibat = Tintuc::where("NoiBat",1)->take(4)->get();
        $tinlienquan = Tintuc::where("idLoaiTin", $tintuc->idLoaiTin)->take(4)->get();
        return view("frontend.pages.tintuc", compact("tintuc", "tinnoibat", "tinlienquan"));
    }

    public function getDangNhap()
    {
        return view("frontend.pages.dangnhap");
    }

    public function postDangNhap(request $req)
    {
        $val = $req->validate([
            'email' => 'required',
            'password' => 'required|min:3|max:32'
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu không được nhỏ hơn 3 ký tự',
            'password.max' => 'Mật khẩu không được nhỏ hơn 32 ký tự'
        ]);
        if (Auth::attempt(['email' => $val['email'], 'password' => $val['password']]))
        {
            return redirect('trangchu');
        }
        else
        {
            return back()->with("thongbao","Đăng nhập thất bại");
        }
    }
    public function getDangXuat()
    {
        Auth::logout();
        return view('frontend.pages.trangchu');
    }

    public function postBinhLuan(Request $req, $id)
    {
        $val = $req->validate([
            'noidung' => 'required'
        ],[
            'noidung.required' => 'Bạn chưa nhập bình luận'
        ]);
        $tintuc = TinTuc::find($id);
        $comment = new Comment();
        $comment -> idTinTuc = $id;   
        $comment -> idUser = Auth::user()->id;
        $comment -> noidung = $req->noidung;
        $comment -> save();
        return redirect()->route('tintuc', [$id, $tintuc->TieuDeKhongDau]);                                                                                                                                                           
    }

    public function getNguoiDung()
    {
        $user = Auth::user();
        return view("frontend.pages.nguoidung", compact("user"));
    }

    public function postNguoiDung(Request $req)
    {
        $val = $req->validate([
            'name' => 'required|min:3'
        ],[ 
            'name.required' => 'Bạn chưa nhập tên người dùng.',
            'name.min' => 'Tên người dùng tối thiểu 3 ký tự'
        ]);
        $user = Auth::user();
        $user->name = $val['name'];

        if ($req->changepassword=="on")
        {
            $val = $req->validate([
                'password' => 'required|min:3|max:32',
                'passwordAgain' => 'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu.',
                'password.min' => 'Mật khẩu ít nhất 3 ký tự.',
                'password.max' => 'Mật khẩu tối đa 32 ký tự.',
                'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu,',
                'passwordAgain.same' => 'Mật khẩu không trùng khớp.'
            ]);
            $user->password = bcrypt($val["password"]);
        }
        $user->save();
        return back()->with("thongbao", "Bạn đã cập nhật thành công");        
    }   

    public function getDangKy()
    {
        return view ("frontend.pages.dangky");
    } 

    public function postDangKy(Request $req)
    {
        $validate = $req->validate([
            'name' => 'required|min:3',
            'email' =>  'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.required' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'email.required' => 'Bạn chưa email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email này đã được đăng ký',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất phải 3 ký tự',
            'password.max' => 'Mật khẩu tối đa chỉ 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu chưa trùng khớp'
        ]);
    $user = new User;
    $user-> name = $validate["name"];
    $user-> email = $validate["email"];
    $user-> password = bcrypt($validate['password']);
    $user-> quyen = 0;
    $user-> save();
    return redirect()->route("dangky")->with("thongbao", "chúc mừng bạn đã đăng ký thành công");
    }

    public function getTimKiem(Request $req)
    {
        $tukhoa = $req->tukhoa;
        $tintuc = tintuc::where('TieuDe', 'like', "%$tukhoa%")
                    ->orWhere("TomTat", "like", "%$tukhoa%")
                    ->orWhere("NoiDung", "like", "%$tukhoa%")
                    ->take(30)->paginate(5);
        return view("frontend.pages.timkiem", compact("tintuc", "tukhoa"));
    }
}
