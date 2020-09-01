<form action="{{ route($name_route) }}" class="mb-2">
    <div class="row">
        <div class="col-md-4">
            <select name="created_at" class="form-control">
                <option value="DESC">Descendente</option>
                <option
                        {{ request('created_at') == "ASC" ? "selected" : '' }}
                        value="ASC">Ascendente
                </option>
            </select>
        </div>
        <div class="col-md-7">
            <input type="text" value="{{ request('search') }}" name="search" placeholder="Buscar..."
                   class="ml-1 form-control">
        </div>

        <div class="col-md-1 text-right">
            <button type="submit" class="ml-2 btn btn-success">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>