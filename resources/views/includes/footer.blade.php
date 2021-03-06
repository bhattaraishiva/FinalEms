<footer class="main-footer" id="hide_on_print">
  <strong>Copyright &copy; 2019 <a href="https://nepathyacollege.com.np" target="new-tab">IT & RC</a>.</strong> All
  rights
  reserved.
</footer>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}"></script>

{{-- for nepali date and toster  --}}
<script type="text/javascript" src="{{asset('js/nepali.datepicker.v2.2.min.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
{{-- jquery for chosen  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
{{-- this is for nepali_english date picker --}}
<script src="{{asset('js/nep_eng_date_picker/jDatepicker.js')}}" type="text/javascript"></script>


<script>
  // this is for ad_bs date_picker calendar in mastersearch
  $(function(){
    $('#np-datepicker').jDatepicker({separator: '-', ADelm: 'dateAD'});
  });
  // for kaamkaj calendar
  $(function(){
    $('#np-datepicker_kaamkaj_first_job1').jDatepicker({separator: '-', ADelm: 'dateAD1'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_first_job2').jDatepicker({separator: '-', ADelm: 'dateAD2'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_before_pradesh1').jDatepicker({separator: '-', ADelm: 'dateAD3'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_before_pradesh2').jDatepicker({separator: '-', ADelm: 'dateAD4'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_current_job1').jDatepicker({separator: '-', ADelm: 'dateAD5'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_current_job2').jDatepicker({separator: '-', ADelm: 'dateAD6'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_current_job3').jDatepicker({separator: '-', ADelm: 'dateAD7'});
  });
  $(function(){
    $('#np-datepicker_kaamkaj_current_job4').jDatepicker({separator: '-', ADelm: 'dateAD8'});
  });

  // for calendar in  samayojan 
  $(function(){
    $('#np-datepicker_samayojan_first_job1').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan1'});
  });
  $(function(){
    $('#np-datepicker_samayojan_first_job2').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan2'});
  });
  $(function(){
    $('#np-datepicker_samayojan_before_pradesh1').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan3'});
  });
  $(function(){
    $('#np-datepicker_samayojan_before_pradesh2').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan4'});
  });
  $(function(){
    $('#np-datepicker_samayojan_current_job1').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan5'});
  });
  $(function(){
    $('#np-datepicker_samayojan_current_job2').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan6'});
  });
  $(function(){
    $('#np-datepicker_samayojan_current_job3').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan7'});
  });
  $(function(){
    $('#np-datepicker_samayojan_current_job4').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan8'});
  });
  $(function(){
    $('#np-datepicker_samayojan_current_job5').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan9'});
  });
  $(function(){
    $('#np-datepicker_samayojan_current_job6').jDatepicker({separator: '-', ADelm: 'dateAD_samayojan10'});
  });

  //for calendar in karar
  $(function(){
    $('#np-datepicker_karar_current_job0').jDatepicker({separator: '-', ADelm: 'dateAD_karar0'});
  });
  $(function(){
    $('#np-datepicker_karar_current_job1').jDatepicker({separator: '-', ADelm: 'dateAD_karar1'});
  });
  $(function(){
    $('#np-datepicker_karar_current_job2').jDatepicker({separator: '-', ADelm: 'dateAD_karar2'});
  });
  $(function(){
    $('#np-datepicker_karar_current_job3').jDatepicker({separator: '-', ADelm: 'dateAD_karar3'});
  });

  //for calendar in naya
  $(function(){
    $('#np-datepicker_naya_job1').jDatepicker({separator: '-', ADelm: 'dateAD_naya1'});
  });
  $(function(){
    $('#np-datepicker_naya_job2').jDatepicker({separator: '-', ADelm: 'dateAD_naya2'});
  });
  $(function(){
    $('#np-datepicker_naya_job3').jDatepicker({separator: '-', ADelm: 'dateAD_naya3'});
  });

  //for calendar in edit employee
  $(function(){
    $('#np-datepicker_edit_employee0').jDatepicker({separator: '-', ADelm: 'dateAD_edit_employee0'});
  });
  $(function(){
    $('#np-datepicker_edit_employee1').jDatepicker({separator: '-', ADelm: 'dateAD_edit_employee1'});
  });
  $(function(){
    $('#np-datepicker_edit_employee2').jDatepicker({separator: '-', ADelm: 'dateAD_edit_employee2'});
  });
  $(function(){
    $('#np-datepicker_edit_employee3').jDatepicker({separator: '-', ADelm: 'dateAD_edit_employee3'});
  });
  $(function(){
    $('#np-datepicker_edit_employee4').jDatepicker({separator: '-', ADelm: 'dateAD_edit_employee4'});
  });
  $(function(){
    $('#np-datepicker_edit_employee5').jDatepicker({separator: '-', ADelm: 'dateAD_edit_employee5'});
  });

  //calender in emp create
  $(function(){
    $('#np-datepicker_create_emp_detail1').jDatepicker({separator: '-', ADelm: 'dateAD_create_emp1'});
  });



  $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            })
          });
</script>


{{-- <script>
$(function () {
      $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
      });
  });
</script> --}}

<script>
  $(document).ready(function () {
      $('.sidebar-menu').tree()
    })
</script>
<!-- page script -->
<script>
  @if(Session::has('success'))
          toastr.success("{{Session::get('success')}}")
      @endif
</script>
{{-- Script for dynamic sublists --}}
<script>
  $(document).ready(function(){
                  $('.dynamic').change(function(){

                      if($(this).val() != ''){
                          var select = $(this).attr('id');
                          var value = $(this).val();
                          var dependent = $(this).data('dependent');
                          var _token = $('input[name="_token"]').val();
                          console.log(select,value,dependent);
                          $.ajax({
                              url:"{{ route('dynamic.fetch') }}",
                              method :"POST",
                              dataType:"html",
                              data:{select:select,value:value,_token:_token,dependent:dependent},
                              success:function(result){
                                  $('#'+dependent).html(result);
                                  // $('#message').html(result);
                              },
                              error:function(jqXHR, timeout, message){
                                // console.log()
                                console.log( message);
                                // alert("  उपलब्ध  हुन सकेन !! ");
                              }
                          })
                      }else
                      console.log("no data");
                  })
              });
</script>

<script>
  function FillAddress(f) {
    // console.log(f);
  if(f.addresstoo.checked == true) {
    var ppradesh = f.ppradesh_id.value;
    var pdistrict = f.pdistrict_id.value;
    var ppalika = f.ppalika_id.value;
    var pward = f.permanent_wardno.value;
    var ptole = f.permanent_tole.value;

    // console.log(ppradesh,pdistrict,ppalika,pward,ptole);
    document.getElementById("cdistrict_id").innerHTML = document.getElementById("district_id").innerHTML;
    document.getElementById("cpalika_id").innerHTML = document.getElementById("palika_id").innerHTML;

    f.cpradesh_id.value= ppradesh;
    f.cdistrict_id.value = pdistrict;
    f.cpalika_id.value = ppalika;
    f.current_wardno.value = pward;
    f.current_tole.value = ptole;
    // console.log(f.cpalika_id.value);
    console.log( f.cpradesh_id.value,f.cdistrict_id.value,f.cpalika_id.value,f.current_wardno.value,f.current_tole.value);
  }
  else{
    console.log("not checked");
    f.cpradesh_id.value= '';
    f.cdistrict_id.value = '';
    f.cpalika_id.value = '';
    f.current_wardno.value = '';
    f.current_tole.value = '';
    console.log( f.cpradesh_id.value,f.cdistrict_id.value,f.cpalika_id.value,f.current_wardno.value,f.current_tole.value);

  }
}
</script>

{{-- to preview image while selecting --}}
<script>
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#pic')
                  .attr('src', e.target.result)
                  .width(100)
                  .height(100)

          };

          reader.readAsDataURL(input.files[0]);
      }
      }
</script>

{{-- for nepali date picker --}}
<script>
  $(document).ready(function () {
      $('#nepaliDate5').nepaliDatePicker({
      npdMonth: true,
      npdYear: true,
      npdYearCount: 150 // Options | Number of years to show
      });
      });
      $(document).ready(function () {
              $('#nepaliDate6').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });
      $(document).ready(function () {
              $('#nepaliDate7').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
      });
      $(document).ready(function () {
              $('#nepaliDate8').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
      });
      $(document).ready(function () {
              $('#nepaliDate9').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
      });

      $(document).ready(function () {
              $('#nepaliDate10').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
      });
      $(document).ready(function () {
              $('#nepaliDate11').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
      });
      $(document).ready(function () {
              $('#nepaliDate12').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
      });
      $(document).ready(function () {
              $('#nepaliDate13').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate14').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });
    $(document).ready(function () {
              $('#nepaliDate15').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate16').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate17').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate18').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate19').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate20').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate21').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });
    $(document).ready(function () {
              $('#nepaliDate22').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate23').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate24').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate25').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });

    $(document).ready(function () {
              $('#nepaliDate26').nepaliDatePicker({
          npdMonth: true,
          npdYear: true,
          npdYearCount: 150 // Options | Number of years to show
      });
    });
</script>

{{-- for checking whether the pad _number is less than the karyalaya darbandi number --}}
<script>
  $(document).ready(function(){
              $('#pad_quantity').keyup(function(){
                  if($(this).val() != ''){

                      var karyalaya_id = $("#kar_id").val();
                      var select = $(this).attr('id');
                      var value = $(this).val();
                      // var dependent = $(this).data('dependent');
                      var _token = $('input[name="_token"]').val();
                      console.log(karyalaya_id,select,value,);
                      $.ajax({
                          url:"{{route('dynamic.fetch.check_no_of_pads')}}",
                          method :"POST",
                          data:{select:select,value:value,karyalaya_id:karyalaya_id,_token:_token},
                          success:function(result){
                              console.log(result);
                              if(result){
                                  $('#pad_quantity').val('');
                              }

                          },
                          error:function(){
                            console.log('error');
                          }
                      })
                  }
                  else{
                      console.log("no data");

                  }
              })
          });
</script>

{{-- choosen method is for dynamically  searching the content from option   --}}
<script>
  $('.chosen').chosen();
</script>
{{-- for next button in tab  --}}

{{-- <script>
      $(function ()
            $('#myTab a:last').tab('show');
          )
  </script>

<script>
$(document).ready(function () {
$(".nexttab").click(function() {
  var t=$("#myTab").tab();

  var selected = $("#myTab").tab("option", "selected");

  console.log(selected);
  $("#myTab").tab("option", "selected", selected + 1);
});
});
</script> --}}

{{-- to show the information of pardesh employee if s/he is member of pradesh --}}
<script>
  $(document).ready(function () {
  $("#spouse_province_employee").click(function () {
  // console.log("hello");
    if ($(this).is(":checked")) {
        $("#spouse_pradesh_employee").show();
    } else {
        $("#spouse_pradesh_employee").hide();
        $("#spouse_office_name").val('');
        $("#spouse_employee_number").val('');
        $("#spouse_pradesh_employee_number").val('');
    }
});
});
</script>

{{-- to enter spouse name if marrired --}}
<script>
  $(document).ready(function () {
  $("#marital_status").change(function () {
    // console.log("hello");
    if( $(this).val() == "m") {
      $('#spousename').show();
  } else {
      $('#spousename').hide();
  }
  });
});
</script>
{{-- to show different form for different employee type --}}
<script>
  $(document).ready(function () {
  $("#employee_type").change(function () {
    var select = $(this).val();
    console.log(select);
    if( $(this).val() == "samayojan") {
      $('#kaam_kaaj_employee').hide();
      $('#naya_employee').hide();
      $('#samayojan_employee').show();
      $('#karar_employee').hide();
      $('#empty').hide();

  } else if( $(this).val() == "kaam_kaaj") {
      $('#samayojan_employee').hide();
      $('#naya_employee').hide();
      $('#kaam_kaaj_employee').show();
      $('#karar_employee').hide();
      $('#empty').hide();

  }else if( $(this).val() == "karar") {
      $('#karar_employee').show();
      $('#naya_employee').hide();
      $('#kaam_kaaj_employee').hide();
      $('#samayojan_employee').hide();
      $('#empty').hide();


    }else if( $(this).val() == "naya") {
      $('#naya_employee').show();
      $('#kaam_kaaj_employee').hide();
      $('#samayojan_employee').hide();
      $('#karar_employee').hide();
      $('#empty').hide();

    }
    else{
      $('#empty').show();
      $('#naya_employee').hide();
      $('#kaam_kaaj_employee').hide();
      $('#samayojan_employee').hide();
      $('#karar_employee').hide();
    }
  });
});
</script>


{{-- to show different form for operation of employee activity --}}
<script>
  $(document).ready(function () {
    $("#employee_activity").change(function () {
      var select = $(this).val();
      console.log(select);
      if( $(this).val() == "samayojan") {
        $('#samayojan_form').show();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();
    } else if( $(this).val() == "padasthapan") {
      $('#padasthapan_form').show();
        $('#samayojan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

    }else if( $(this).val() == "saruwa") {
        $('#saruwa_form').show();
        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

      }else if( $(this).val() == "baduwa") {
        $('#baduwa_form').show();
        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

      }
      else if( $(this).val() == "nilamban") {
        $('#nilamban_form').show();
        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

      }else if( $(this).val() == "awakash") {
        $('#awakash_form').show();
        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#nilamban_form').hide();
        $('#baduwa_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

      }else if( $(this).val() == "rajinama") {
        $('#rajinama_form').show();
        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#baduwa_form').hide();
        $('#sangh_firta_form').hide();

         $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

      }else if( $(this).val() == "sangh_firta") {
        $('#sangh_firta_form').show();
        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#baduwa_form').hide();

        $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

      }

    });
  });
</script>

{{-- this is for checkbox agreement while submittting form --}}
<script>
  $(document).ready(function(){
   $('#confirmsave').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        $('#saveactivity').removeAttr('disabled'); //enable input
    } else {
        $('#saveactivity').attr('disabled', true); //disable input
    }
  });
  });
</script>

{{-- this is for educational form multiple rows --}}
<script>
  $(document).ready(function(){

    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow()
    {
        // alert('asd');
        //adding row
      var tr='<tr>'+
          '<td><input type="text" name ="serial_no[]" class="form-control serial_no" ></td>'+
          '<td><input type="text" name="edu_level[]" class="form-control edu_level"></td>'+
          '<td><input type="text" name="stream[]" class="form-control stream" placeholder="नभए खाली"></td>'+
          '<td><input type="text" name="major_sub[]" class="form-control major_sub"></td>'+
          '<td><input type="text" name="board[]" class="form-control board"></td>'+
          '<td><input type="text" name="edu_institute[]" class="form-control edu_institute"></td>'+
          '<td><input type="text" name="country[]" class="form-control country"></td>'+
          '<td><input type="text" name="passed_year[]" class="form-control passed_year"></td>'+
          '<td><input type="text" name="division[]" class="form-control division"></td>'+

          '<td><button type="button" class="btn btn-danger remove">-</button></td>'
          $('tbody').append(tr);
     };
        //removing row
     $('.table tbody').on('click','.remove',function(){
      var last=$('.table tbody tr').length;
        console.log(last);
        if(last==1){
            alert("You Cant Remove This");
        }
        else {
        $(this).parent().parent().remove();
        // $(this).closest('tr').remove();

       }
      // $(this).closest('tr').prev().remove();

     });
    });

</script>

<!-- checking  number of pads and darbandi number  -->
<script>
  $(document).ready(function(){
    $('tbody').delegate('.pad_qty','keyup',function(){
        var tr =$(this).parent().parent();
        // console.log(tr);
        var pad_qty = tr.find('.pad_qty').val();
        var test = tr.find('#total_pad');
        total();
    });
      function total()
    {
        var total =0;
        $('.pad_qty').each(function(i,e){
            var amount = $(this).val()- 0;
            total +=amount;
        });

        var tpad = $('#total_pad').val(total).val();
        var totalpad = parseInt(tpad);
        var t_darbandi = $('#employee_number').val();
        var total_darbandi = parseInt(t_darbandi);

        console.log(total_darbandi,totalpad);
        if( totalpad > total_darbandi ){
          alert("जम्मा पद संख्या (दरबन्दी संख्या भन्दा बढी हुनु हुदैन )");
        }
    };

      $('.addRowforpad').on('click',function(){
          addRow();
      });

      function addRow()
      {
          // alert('asd');
          //adding row
        var tr='<tr>'+
            '<td><select class="form-control " name ="pad[]"><option>पद</option>@foreach($pads as $pad)<option value="{{ $pad->id }}">{{ $pad->pad_name }}</option>@endforeach</select></td>'+

            '<td><input type="number"  min="0" name="pad_qty[]" class="form-control pad_qty"></td>'+
            '<td><button type="button" class="btn btn-danger removepad">-</button></td>'
            $('tbody').append(tr);
       };
          //removing row
       $('.table tbody').on('click','.removepad',function(){
        var last=$('.table tbody tr').length;
        console.log(last);
        if(last==1){
            alert("You Cant Remove This");
        }
        else {
        $(this).parent().parent().remove();
        // $(this).closest('tr').remove();

       }
      });
    });


</script>

{{-- this is for the selecting minor_activity of employee --}}
<script type="text/javascript">
  $(document).ready(function(){
  $('#sec_employee_activity').change(function(){
    var select = $('#sec_employee_activity').val();
    console.log(select);
    if( select == "training") {
        $('#training').show();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

    } else if( select == "foreign_tour") {
      $('#foreign_tour').show();
        $('#training').hide();
        $('#leave').hide();
        $('#motivation').hide();
        $('#penalty').hide();

        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

    }else if( select == "leave") {
        $('#leave').show();
        $('#training').hide();
        $('#foreign_tour').hide();
        $('#motivation').hide();
        $('#penalty').hide();

        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

      }else if( select == "motivation") {
        $('#motivation').show();
        $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#penalty').hide();

        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();

      }else if( select == "penalty") {
        $('#penalty').show();
        $('#training').hide();
        $('#foreign_tour').hide();
        $('#leave').hide();
        $('#motivation').hide();

        $('#samayojan_form').hide();
        $('#padasthapan_form').hide();
        $('#saruwa_form').hide();
        $('#baduwa_form').hide();
        $('#nilamban_form').hide();
        $('#awakash_form').hide();
        $('#rajinama_form').hide();
        $('#sangh_firta_form').hide();
      }
  });
});
</script>

{{-- for printing --}}
<script>
  function printit(){
     window.print();
     }
</script>

{{-- disable date field in samayojan case if ticked in kamkaj  --}}
<script>
  $(document).ready(function(){
   $('#worked_at_pradesh').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
      console.log('checked');
      $('#np-datepicker_samayojan_current_job2').prop('disabled',true);
      $('#np-datepicker_samayojan_current_job4').prop('disabled',true);
      $('#np-datepicker_samayojan_current_job3').prop('disabled',false);
      //enable input
    } else {
      console.log('not checked');
      $('#np-datepicker_samayojan_current_job2').prop('disabled',false);
      $('#np-datepicker_samayojan_current_job4').prop('disabled',false);
      $('#np-datepicker_samayojan_current_job3').prop('disabled',true);

       //enable input

    }
  });
  });
</script>