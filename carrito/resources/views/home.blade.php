
@if(Auth::user()->rol =='Empresa')
	@include('layouts.empresa')

@elseif(Auth::user()->rol == 'Cliente')
	@include('layouts.cliente')
@else
	@include('layouts.empresa')
@endif


