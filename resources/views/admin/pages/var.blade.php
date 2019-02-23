@extends ('admin.layout')

@section ('content')
    <form action="{{route('storeVar')}}" method="POST">
    {{csrf_field()}}
        <label for="delivery_charge"> Delivery Charge </label>
        <input value="{{$var['delivery_charge']}}" class="form-control" name="delivery_charge" placeholder="Delivery Charge" type="number" required />
        
        <label for="tax_charge"> Tax Charge </label>
        <input value="{{$var['tax_charge']}}" class="form-control" name="tax_charge" placeholder="Tax Charge" type="number" required />

        <button type="submit"> Submit </button>
    </form>
@endsection