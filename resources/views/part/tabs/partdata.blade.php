@include('includes.dialogs.typecreate', [
	'typedialog' => $typedialog
])

@include('includes.dialogs.modelcreate', [
	'modeldialog' => $modeldialog
])

		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @if ($errors->has('vehicle_id')) is-invalid is-dirty @endif"">
            {!!Form::select('vehicle_id', $vehicle_id, $part->vehicle_id, ['class' => 'mdl-textfield__input'])!!}
   			{!!Form::label('vehicle_id', Lang::get('general.vehicle'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
        	<span class="mdl-textfield__error">{{ $errors->first('vehicle_id') }}</span>
        </div>
        
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @if ($errors->has('vendor_id')) is-invalid is-dirty @endif"">
            {!!Form::select('vendor_id', $vendor_id, $part->vendor_id, ['class' => 'mdl-textfield__input'])!!}
   			{!!Form::label('vendor_id', Lang::get('general.vendor'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
        	<span class="mdl-textfield__error">{{ $errors->first('vendor_id') }}</span>
        </div>
        
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @if ($errors->has('part_type_id')) is-invalid is-dirty @endif"">
            {!!Form::select('part_type_id', $part_type_id, $part->part_type_id, ['id' => 'part_type_id', 'class' => 'mdl-textfield__input dialog-add-item-combobox'])!!}
   			<i id="type-add" class="material-icons dialog-add-item-button">add_circle_outline</i>
			{!!Form::label('part_type_id', Lang::get('general.part_type'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
        	<span class="mdl-textfield__error">{{ $errors->first('part_type_id') }}</span>
        </div>
        
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @if ($errors->has('part_model_id')) is-invalid is-dirty @endif"">
            {!!Form::select('part_model_id', $part_model_id, $part->part_model_id, ['id' => 'part_model_id', 'class' => 'mdl-textfield__input dialog-add-item-combobox'])!!}
   			<i id="model-add" class="material-icons dialog-add-item-button">add_circle_outline</i>
			{!!Form::label('part_model_id', Lang::get('general.part_model'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
        	<span class="mdl-textfield__error">{{ $errors->first('part_model_id') }}</span>
        </div>
        
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label @if ($errors->has('part_id')) is-invalid is-dirty @endif"">
            {!!Form::select('part_id', $part_id, $part->part_id, ['class' => 'mdl-textfield__input'])!!}
   			{!!Form::label('part_id', Lang::get('general.linked_part'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
        	<span class="mdl-textfield__error">{{ $errors->first('part_id') }}</span>
        </div>
		
		<div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label @if ($errors->has('cost')) is-invalid is-dirty @endif"" data-upgraded="eP">
     		{!!Form::tel('cost', $part->cost, ['id' => 'cost', 'class' => 'mdl-textfield__input mdl-textfield__maskmoney', 'maxlength' => '12'])!!}
			{!!Form::label('cost', Lang::get('general.cost'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
			<span class="mdl-textfield__error">{{ $errors->first('cost') }}</span>
		</div>
		
		<div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label @if ($errors->has('name')) is-invalid is-dirty @endif"" data-upgraded="eP">
     		{!!Form::text('name', $part->name, ['class' => 'mdl-textfield__input'])!!}
			{!!Form::label('name', Lang::get('general.name'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
			<span class="mdl-textfield__error">{{ $errors->first('name') }}</span>
		</div>
        
		<div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label @if ($errors->has('number')) is-invalid is-dirty @endif"" data-upgraded="eP">
     		{!!Form::text('number', $part->number, ['class' => 'mdl-textfield__input'])!!}
			{!!Form::label('number', Lang::get('general.part_number'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
			<span class="mdl-textfield__error">{{ $errors->first('number') }}</span>
		</div>   
		
		<div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label @if ($errors->has('miliage')) is-invalid is-dirty @endif"" data-upgraded="eP">
     		{!!Form::number('miliage', $part->miliage, ['class' => 'mdl-textfield__input'])!!}
			{!!Form::label('miliage', Lang::get('general.miliage'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
			<span class="mdl-textfield__error">{{ $errors->first('miliage') }}</span>
		</div>  
		
		<div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label @if ($errors->has('position')) is-invalid is-dirty @endif"" data-upgraded="eP">
     		{!!Form::text('position', $part->position, ['class' => 'mdl-textfield__input'])!!}
			{!!Form::label('position', Lang::get('general.position'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
			<span class="mdl-textfield__error">{{ $errors->first('position') }}</span>
		</div> 
		
		<div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label @if ($errors->has('lifecycle')) is-invalid is-dirty @endif"" data-upgraded="eP">
     		{!!Form::number('lifecycle', $part->lifecycle, ['class' => 'mdl-textfield__input'])!!}
			{!!Form::label('lifecycle', Lang::get('general.lifecycle'), ['class' => 'mdl-color-text--primary-contrast mdl-textfield__label is-dirty'])!!}
			<span class="mdl-textfield__error">{{ $errors->first('lifecycle') }}</span>
		</div> 
        
		<div class="mdl-card__actions">
			<button type="submit" class="mdl-button mdl-color--primary mdl-color-text--accent-contrast mdl-js-button mdl-button--raised mdl-button--colored">
              {{ Lang::get('general.Send') }} 
            </button>
		</div>
		