@extends('admin.panel.admin_panel')
@section('admin')

<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Testimonials</h2>
    </div>

    <div class="card-header card-header-border-bottom">
        <a href="{{route('showTestimonialForm')}}" class="btn btn-info" style="align-content: center; color: white;">Create Testimonial</a>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Customer Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td><img src="{{asset("$testimonial->customer_image")}}" width="100px" height="100px" alt="No Image"></td>
                            <td>{{$testimonial->customer_name}}</td>
                            <td>{{$testimonial->customer_message}}</td>
                            <td>
                                <a href="{{url('dashboard/showAllTestimonials/edit/'.$testimonial->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                                <a href="{{url('dashboard/showAllTestimonials/delete/'.$testimonial->id)}}" class="btn btn-danger" ><i class="fas fa-trash" style="color: white;"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection