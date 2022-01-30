@extends('admin.panel.admin_panel')
@section('admin')
<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Messages Section</h2>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->contact_name}}</td>
                            <td>{{$contact->contact_email}}</td>
                            <td>{{$contact->contact_subject}}</td>
                            <td>{{$contact->contact_message}}</td>
                            <td>
                                <a href="{{url('dashboard/showAllContacts/delete/'.$contact->id)}}" class="btn btn-danger" ><i class="fas fa-trash" style="color: white;"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection