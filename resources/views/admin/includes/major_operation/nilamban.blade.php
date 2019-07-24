{{-- this is for opration oper_nilamban info --}}
<h3 id="section_header3">निलम्बन विवरण</h3>
<div class="row">
    <div class="col-sm-2">
        <label for="name">निलम्बन निर्णय मिति : <sup>*</sup></label>
        <input type="text" class="form-control" name="oper_nilamban_appointed_date" nepali-calendar" id="nepaliDate12"
            placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-2">
        <label for="name">सेवा :<sup>*</sup></label>
        <select name="oper_nilamban_sewa" id="sewa_id" class="form-control  dynamic"
            data-dependent='oper_nilamban_samuha_id' readonly>
            <option  selected value="{{$employee[0]->sewa->id}}">{{$employee[0]->sewa->sewa_name}}</option>
            @foreach ($sewas as $sewa)
            <option hidden value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">समुह :<sup>*</sup></label>
        <select name="oper_nilamban_samuha" id="oper_nilamban_samuha_id" class="form-control  dynamic"
            data-dependent='oper_nilamban_upasamuha_id' readonly>
            <option  selected value="{{$employee[0]->samuha->id}}">{{$employee[0]->samuha->samuha_name}}</option>
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">उप-समुह :<sup>*</sup></label>
        <select name="oper_nilamban_upasamuha" id="oper_nilamban_upasamuha_id" class="form-control" readonly>
            <option  selected value="{{$employee[0]->upasamuha->id}}">{{$employee[0]->upasamuha->upasamuha_name}}</option>
        </select>
    </div>
    <div class="col-sm-2">
            <label for="shreni">श्रेणी :<sup>*</sup></label>
            <select name="oper_nilamban_shreni" id="kaamkaj_shreni" class="form-control" readonly>
                    <option  selected value="{{$employee[0]->shreni['id']}}">{{$employee[0]->shreni['shreni_name']}}</option>
                @foreach ($shrenis as $shreni)
                <option hidden value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <label for="name">तह :<sup>*</sup></label>
            <select readonly name="oper_nilamban_taha" id="kaamkaj_taha" class="form-control">
                    <option  selected value="{{$employee[0]->taha->id}}">{{$employee[0]->taha->taha_name}}</option>
                @foreach ($tahas as $taha)
                <option hidden value="{{$taha->id}}">{{$taha->taha_name}}</option>
                @endforeach
            </select>
        </div>
</div>
<hr>
<div class="row">
        <div class="form-group col-md-3 ">
        <label for="name">मन्त्रालय :<sup>*</sup></label>
        <select readonly name="oper_nilamban_ministry" id="ministry_id" class="form-control  dynamic"
            data-dependent='oper_nilamban_karyalaya_id'>
            <option  selected value="{{$employee[0]->ministry->id}}">{{$employee[0]->ministry->ministry_name}}</option>
            @foreach ($ministries as $ministry)
            <option hidden value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3 ">
        <div class="form-group">
            <label for="name">निर्देशनालय:<sup>*</sup></label>
            <select readonly name="oper_nilamban_nirdeshanalaya" id="nirdeshanalaya_id" class="form-control ">
                    <option  selected value="{{$employee[0]->nirdeshanalaya['id']}}">{{$employee[0]->nirdeshanalaya['nir_name']}}</option>
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                <option hidden value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय:<sup>*</sup></label>
            <select readonly name="oper_nilamban_karyalaya" id="oper_nilamban_karyalaya_id" class="form-control  dynamic"
                data-dependent="oper_nilamban_pad_id">
                <option selected value="{{$employee[0]->karyalaya->id}}">{{$employee[0]->karyalaya->kar_name}}</option>
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद :<sup>*</sup></label>
            <select readonly name="oper_nilamban_pad" id="oper_nilamban_pad_id" class="form-control">
                    <option  selected value="{{$employee[0]->pad['id']}}">{{$employee[0]->pad['pad_name']}}</option>
            </select>
        </div>
    </div>
</div>