@extends('layouts.app', ['title' => 'Users Manager'])

@section('content')

<div class="row form-container">
    <div class="align-spacer"></div>
    <div class="col-md-offset-2 col-md-8 col-xs-12">
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="5"> 
                         {{ Html::linkRoute('users.create', 'Create',null, ['class' => 'btn btn-primary-inverse'])  
                            }}
                    </th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user['name']}} </td>
                        <td>{{ $user['email']}}</td>
                        <td>{{ $user['phone']}}</td>
                        <td>{{ Html::image('storage/user/avatars/'.$user['image_url'],
                            '',
                            ['class' => 'avatars'])
                            }}        
                        </td>
                        <td>
                            {{ Html::linkRoute('users.edit', 'Edit', ['id' => $user['id']], ['class' => 'btn btn-primary'])  
                            }}
                            
                            {{ Html::linkRoute('users.destroy', 'Remove', ['id' => 
                                $user['id']], ['class' => 'btn btn-primary-inverse'])  
                            }}

                        </td>    
                    </tr>

                @endforeach
            </tbody>
        </table>
        
        {{ $users->links() }}
    </div>
</div>

@endsection

@section('footer')

@endsection