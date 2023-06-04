<x-app-layout>
    <div class="card">
    <div class="card-body">
    <a href="/inventory/category/add" class="btn btn-primary">
        add category
    </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    Id 
                </th>
                <th>
                name
               </th>
               <th>
                code 
               </th>
               <th>
                action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categoryList as $category)
            <tr>
                <td>
                    {{ $category->id}}
                </td>
                <td>
                    {{ $category->name}}
                </td>
                <td>
                    {{ $category->code}}
                </td>
                <td>
                    <a href="/inventory/category/edit?categoryId={{$category->id}}"
                    class="btn btn-info">
                    Edit Me
                    </a>
                    
                    <a href="/inventory/category/delete?categoryId={{$category->id}}"
                    class="btn btn-danger">
                delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>