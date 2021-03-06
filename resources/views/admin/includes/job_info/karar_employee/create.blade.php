<h3 id="section_header2">करार</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="name">करार निर्णय मिति : <sup>*</sup></label>
        <div id="datepicker">
                <input class="form-control" type="text" name="karar_appointed_date" id="np-datepicker_karar_current_job0" placeholder="YYYY-MM-DD" />
                <input id="dateAD_karar0" type="text" name="karar_appointed_date_ad" hidden/>
            </div>
        {{-- <input type="text" class="form-control" name="karar_appointed_date" nepali-calendar" id="nepaliDate19"
            placeholder="YYYY-MM-DD"> --}}
    </div>
    <div class="col-sm-3">
        <label for="name">करार लागु हुने अवधिः मिति: <sup>*</sup></label>
        <div id="datepicker">
            <input class="form-control" type="text" name="karar_start_date" id="np-datepicker_karar_current_job1" placeholder="YYYY-MM-DD" />
            <input id="dateAD_karar1" type="text" name="karar_start_date_ad" hidden/>
        </div>
        {{-- <input type="text" class="form-control" name="karar_start_date" nepali-calendar" id="nepaliDate20"
            placeholder="YYYY-MM-DD"> --}}
        देखि  <div id="datepicker">
                <input class="form-control" type="text" name="karar_end_date" id="np-datepicker_karar_current_job2" placeholder="YYYY-MM-DD" />
                <input id="dateAD_karar2" type="text" name="karar_end_date_ad" hidden/>
            </div>
        {{-- <input type="text" class="form-control" name="karar_end_date" nepali-calendar" id="nepaliDate21"
            placeholder="YYYY-MM-DD"> --}}
            सम्म
    </div>

    <div class="col-sm-2">
        <label for="name">सेवा : <sup>*</sup></label>
        <select name="karar_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='karar_samuha_id'>
            <option value="">सेवा:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="karar_samuha" id="karar_samuha_id" class="form-control  dynamic" data-dependent='karar_upasamuha_id'>
            <option>पहिले सेवा छान्नुहोस् </option>
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="karar_upasamuha" id="karar_upasamuha_id" class="form-control">
            <option>पहिले समुह छान्नुहोस् </option>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="karar_shreni" id="karar_shreni" class="form-control">
            <option value="">छैन </option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह :<sup>*</sup></label>
        <select name="karar_taha" id="karar_taha" class="form-control">
            <option value="">छैन </option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2 ">
        <label for="name">मन्त्रालय : <sup>*</sup></label>
        <select name="karar_ministry_id" id="ministry_id" class="form-control  dynamic"
            data-dependent='karar_kar_id'>
            <option value="">मन्त्रालय छान्नुहोस्:</option>
            @foreach ($ministries as $ministry)
            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">निर्देशनालय: <sup>*</sup></label>
            <select name="karar_nirdeshanalaya" id="karar_nirdeshanalaya_id" class="form-control  dynamic">
                    <option value="">छैन</option>
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय : <sup>*</sup></label>
            <select name="karar_karyalaya" id="karar_kar_id" class="form-control  dynamic" data-dependent="karar_pad_id">
              <option>पहिले मन्त्रालय छान्नुहोस् </option>
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद :<sup>*</sup></label>
            <select name="karar_pad" id="karar_pad_id" class="form-control">
                    <option value="">पहिले कार्यालय छान्नुहोस् </option>
            </select>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-3">
        <label for="name"> हाजिर भएको मिति : <sup>*</sup></label>
        <div id="datepicker">
            <input class="form-control" type="text" name="karar_attendance_date" id="np-datepicker_karar_current_job3" placeholder="YYYY-MM-DD" />
            <input id="dateAD_karar3" type="text" name="karar_attendance_date_ad" hidden/>
        </div>
        {{-- <input type="text" class=" form-control nepali-calendar" id="nepaliDate22" placeholder="YYYY-MM-DD"
            name="karar_attendance_date" > --}}
    </div>

</div>