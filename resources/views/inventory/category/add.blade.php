<x-app-layout>
    <div class="card">
        <div class="card-body">
            
            <h1><add product>
                <h1>
                  
                <hr>
                <form method ="post"action="/inventory/category/add-post">

                    @csrf
                    <div class="form-goup">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control" required>
                

                    </div>
                    <div>
                    <div class="form-goup">
                    <label for="">code</label>
                    <input type="text" name="code" class="form-control" required>
                        
                    </div>
                    <div>
                    <div class="form-goup">
                    <button class="btn btn-success">
                    save</button></div>

            </h1>
</div>  
        
    </div>
    </form>
</hr>
</x-app-layout>


