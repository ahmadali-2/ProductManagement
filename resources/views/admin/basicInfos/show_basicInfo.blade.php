@extends('admin.panel.admin_panel')
@section('admin')

<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Basic Info</h2>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Website Logo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Address</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td><img src="{{asset("$basicInfo->website_logo")}}" width="100px" height="100px" alt="No Image"></td>
                            <td>{{$basicInfo->website_title}}</td>
                            <td>{{$basicInfo->address}}</td>
                            <td>{{$basicInfo->telephone}}</td>
                            <td>{{$basicInfo->email}}</td>
                            <td>
                                <a href="{{url('dashboard/showAllBasicInfos/edit/'.$basicInfo->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                            </td>
                        </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Social Links</h2>
    </div>
    <div class="card-body">
    <form method="POST" action="{{route('updateSocialLinks')}}">
        @csrf
        <table class="table">
            <tbody>
                    <tr>
                        <td><img src="{{asset('Images/BasicInfo/Whatsapp-icon .png')}}" width="42px" height="42px"></td>
                        <td><textarea type="text" name="social_whatsapp" placeholder="Format: +92 123 1234567" rows="3" cols="30">{{$social->social_whatsapp}}</textarea></td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('Images/BasicInfo/facebook-icon.png')}}" width="42px" height="42px"></td>
                        <td><textarea type="text" name="social_facebook" placeholder="Format: https://www.facebook.com/...." rows="3" cols="30">{{$social->social_facebook}}</textarea></td>

                    </tr>
                    <tr>
                        <td><img src="{{asset('Images/BasicInfo/Linkedin-icon.png')}}" width="42px" height="42px"></td>
                        <td><textarea type="text" name="social_linkedin" placeholder="Format: https://www.linkedin.com/...." rows="3" cols="30">{{$social->social_linkedin}}</textarea></td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('Images/BasicInfo/Twitter-icon.png')}}" width="42px" height="42px"></td>
                        <td><textarea type="text" name="social_twitter" placeholder="Format: https://twitter.com/...." rows="3" cols="30">{{$social->social_twitter}}</textarea></td>
                    </tr>
            </tbody>
        </table>
        <input style="margin-left: 45%;" type="submit" class="btn btn-info" value="Save">
    </form>
    </div>
</div>
</div>
@endsection