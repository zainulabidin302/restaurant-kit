@extends('layouts.app', ['title' => 'Ingredients Manager'])

@section('content')

<div class="row form-container">
    <div class="align-spacer"></div>
    <div class="col-md-offset-2 col-md-8 col-xs-12">
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="5"> 
                         {{ Html::linkRoute('ingredients.create', 'Create',null, ['class' => 'btn btn-primary-inverse'])  
                            }}
                    </th>
                </tr>
                <tr>
                    <th>Title</th>
                    <th>Minimum Order Level</th>
                    <th>Maximum Order Level</th>
                    <th>Current Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ingredients as $ing)
                    <tr>
                        <td>{{ $ing['title']}} </td>
                        <td>{{ $ing['min_order_level']}}</td>
                        <td>{{ $ing['max_order_level']}}</td>
                        <td>       
                        </td>
                        <td>
                            {{ Html::linkRoute('ingredients.edit', 'Edit', ['id' => $ing['id']], ['class' => 'btn btn-primary'])  
                            }}
                            
                            {{ Html::linkRoute('ingredients.destroy', 'Remove', ['id' => 
                                $ing['id']], ['class' => 'btn btn-primary-inverse'])  
                            }}

                        </td>    
                    </tr>

                @endforeach
            </tbody>
        </table>
        
        {{ $ingredients->links() }}
    </div>
</div>

@endsection

@section('footer')

@endsection