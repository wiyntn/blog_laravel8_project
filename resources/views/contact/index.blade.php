@extends('master')

@section('main')
    <div>
        <h3>Admin part</h3>
        
        <a href="{{ route('contact.create') }}">Add new</a>

        <table>
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Date</th>
                    <th>Client name</th>
                    <th>Email address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>01</td>
                    <td>Jan 01, 2021</td>
                    <td>Tarikul Islam</td>
                    <td>tarikul@gmail.com</td>
                    <td>Read</td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Show</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jan 01, 2021</td>
                    <td>Tarikul Islam</td>
                    <td>tarikul@gmail.com</td>
                    <td>Read</td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Show</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Jan 01, 2021</td>
                    <td>Tarikul Islam</td>
                    <td>tarikul@gmail.com</td>
                    <td>Read</td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Show</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection

