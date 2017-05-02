@extends('layouts.app', ['title' => 'Recipie Manager'])

@section('content')

<div class="row form-container">
    <div class="align-spacer"></div>
    <div class="col-md-offset-2 col-md-8 col-xs-12">
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="5"> 
                         {{ Html::linkRoute('recipies.create', 'Create',null, ['class' => 'btn btn-primary-inverse'])  
                            }}
                    </th>
                </tr>
                <tr>
                    <th>Recipie Title</th>
                    <th>Recipie Group</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipies as $recipie)
                    <tr>
                        <td>{{ $recipie['title']}} </td>
                        <td>{{ $recipie->recipieGroup['title']}}</td>
                        <td>{{ $recipie['description']}}</td>
                        <td>
                            {{ Html::linkRoute('recipies.edit', 'Edit', ['id' => $recipie['id']], ['class' => 'btn btn-primary'])  
                            }}
                            
                            {{ Html::linkRoute('recipies.destroy', 'Remove', ['id' => 
                                $recipie['id']], ['class' => 'btn btn-primary-inverse'])  
                            }}

                        </td>    
                    </tr>

                @endforeach
            </tbody>
        </table>
        
        {{ $recipies->links() }}
    </div>
</div>

@endsection

@section('footer')

@endsection