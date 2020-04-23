@extends ("potassium::admin.layout", ['page'=> 'ingredients'])

@section('content')
    <div id="ingredients" v-cloak>
        <div class="content">
            <h1>Ingredients</h1>
        </div>

        <add-section
            button-text="Ajouter un ingrédient"
            route-create="/admin/ingredients"
            :fields="[
                {name:'name','titre':'Nom de l\'ingrédient'},
                {name:'prix','titre':'Prix de l\'ingrédient au kilo'}
            ]"
            :nullable="[]"
            :extra-params="[]">
        </add-section>

        <liste
            fetch_url="/admin/ingredients/liste"
            delete_url="/admin/ingredients/delete"
            :fields="[
                {
                    name: 'name',
                    editable: {
                        status: true,
                        url: '/admin/ingredients/update'
                    }
                },
                {
                    name: 'prix',
                    editable: {status: true}
                }
            ]"
            context="ingredients" />
    </div>
@endsection

