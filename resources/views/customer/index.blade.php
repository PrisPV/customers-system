@extends('layouts.app')

@section('template_title')
    Customer
@endsection

@section('content')
    
        <div class="container-fluid">
            <div class="row">
                @if (Auth::check())
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    
                                    <span id="card_title">
                                        {{ __('Customer') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('customer.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Create New') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>
                                                
                                                <th>Document</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Address</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customers as $customer)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    <td>{{ $customer->document }}</td>
                                                    <td>{{ $customer->first_name }}</td>
                                                    <td>{{ $customer->last_name }}</td>
                                                    <td>{{ $customer->mobile }}</td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->address }}</td>

                                                    <td>
                                                        <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('customer.show',$customer->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('customer.edit',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $customers->links() !!}
                    </div>
                @endif
            </div>
        </div>
    
@endsection
