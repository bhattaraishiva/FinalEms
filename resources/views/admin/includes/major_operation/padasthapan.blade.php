{{-- this is for opration samayojan info --}}
<h3 id="section_header3">पदस्थापन विवरण</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="name">पदस्थापन गर्ने मन्त्रालयमा हाजिर मिति
            <sup>*</sup></label>
        <input type="text" class="form-control" name="oper_padasthapan_attendance_date_to_ministry" nepali-calendar"
            id="nepaliDate7" placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-3">
        <label for="name">
            मन्त्रालय बाट पदस्थापन निर्णय मिति
            <sup>*</sup></label>
        <input type="text" class="form-control" name="oper_padasthapan_appointed_date_from_ministry" nepali-calendar"
            id="nepaliDate8" placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-2">
        <label for="name">सेवा : <sup>*</sup></label>
        <select name="oper_padasthapan_sewa" id="sewa_id" class="form-control  dynamic"
            data-dependent='samuha_id'>
            <option  selected value="{{$employee[0]->sewa->id}}">{{$employee[0]->sewa->sewa_name}}</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="oper_padasthapan_samuha" id="samuha_id" class="form-control  dynamic"
            data-dependent='upasamuha_id'>
            <option  selected value="{{$employee[0]->samuha->id}}">{{$employee[0]->samuha->samuha_name}}</option>
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="oper_padasthapan_upasamuha" id="upasamuha_id" class="form-control">
            <option  selected value="{{$employee[0]->upasamuha->id}}">{{$employee[0]->upasamuha->upasamuha_name}}</option>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="oper_padasthapan_shreni" id="kaamkaj_shreni" class="form-control">
            <option  selected value="{{$employee[0]->shreni->id}}">{{$employee[0]->shreni->shreni_name}}</option>
                @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह : <sup>*</sup></label>
        <select name="oper_padasthapan_taha" id="kaamkaj_taha" class="form-control">
            <option  selected value="{{$employee[0]->taha->id}}">{{$employee[0]->taha->taha_name}}</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2 ">
        <label for="name">मन्त्रालय : <sup>*</sup></label>
        <select name="oper_padasthapan_ministry" id="ministry_id" class="form-control  dynamic"
            data-dependent='oper_padasthapan_kar_id'>
            <option  selected value="{{$employee[0]->ministry->id}}">{{$employee[0]->ministry->ministry_name}}</option>
            @foreach ($ministries as $ministry)
            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">निर्देशनालय: : <sup>*</sup></label>
            <select name="oper_padasthapan_nirdeshanalaya" id="nirdeshanalaya_id"
                class="form-control " >
                <option  selected value="{{$employee[0]->nirdeshanalay['id']}}">{{$employee[0]->nirdeshanalaya['nir_name']}}</option>
                @foreach ($nirdeshanalayas as $nirdeshanalaya)
                <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय : <sup>*</sup></label>
            <select name="oper_padasthapan_karyalaya" id="oper_padasthapan_kar_id" class="form-control  dynamic">
            <option  selected value="{{$employee[0]->karyalaya->id}}">{{$employee[0]->karyalaya->kar_name}}</option>
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद : <sup>*</sup></label>
            <select name="oper_padasthapan_pad" id="oper_padasthapan_pad_id" class="form-control">
                <option  selected value="{{$employee[0]->pad['id']}}">{{$employee[0]->pad['pad_name']}}</option>
                @foreach ($pads as $pad)
                <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-3">
        <label for="name">
            कार्यालयमा हाजिर मिति : <sup>*</sup></label>
        <input type="text" class="form-control" name="oper_padasthapan_attendance_date" nepali-calendar"
            id="nepaliDate9" placeholder="YYYY-MM-DD">
    </div>
</div>
<br>