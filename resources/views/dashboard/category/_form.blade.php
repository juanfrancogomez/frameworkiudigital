@csrf
@include('dashboard.partials.validation-errors')
<div class="form_group mb-3">
    <input placeholder="Nombre categoría" class="form control" 
    type="text" name="category" id="category">
</div>
<div class="form_group mb-3">
<textarea placeholder="Descripción de la categoría" class="form control" name="description_category" 
id="description_category" cols="30" rows="10">
</textarea>
</div>
<div class="mb-3">
    <a href="" class = "btn btn-danger btn-sm" >Cancelar</a>
    <button type="submit" class="btn btn-info btn-sm">Guardar</button>
</div>