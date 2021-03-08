<style>
    #seller table tr td{padding:4px 0px}
    #seller table button{background:#2f714b;border-radius:5px}
    #seller .f-left{float:left}
    #seller .f-right{float: left;padding-left: 15px;}
    #seller img{border-radius:50%}
    #seller .d-flex{background: #f4f4f4;color: #000;border-radius: 4px;}
    #seller .form-control,button {height:40px};
    #seller{
        padding:4px;
        box-shadow: 0 3px 16px rgba(0, 0, 0, 0.1);
    }
</style>
<div class="form-group">
    <form id="seller" action="" style="width:100%">
        <input name="contact_to_staff"  type="hidden" value="0">
        <h3>Liên hệ tư vấn</h3>
        <table style="width:100%">
            <tr>
                <td class="d-flex">
                    <div class="f-left">
                        <img class="rounded" src="http://gianha.vn/thumb.php?src=http://gianha.vn/upload/images/fcecfa372eda11229284a9c4e3b6a46f&w=70&h=70&zc=0" alt="">
                    </div>
                    <div class="f-right">
                        <h4><b>Trương công ánh</b></h4>
                        <p>Sale manager</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input required name="contact_name"  type="text" placeholder="Họ và tên" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <input required name="contact_phone" type="text" placeholder="Số điện thoại" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <input name="contact_email" type="text" placeholder="Địa chỉ email" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <input name="contact_title" type="text" placeholder="Chủ đề" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                   <textarea name="contact_info" style="height:auto" placeholder="Hỏi thông tin..." name="" rows="5" class="form-control"></textarea>
                </td>
            </tr>
            <tr>
                <td><button class="btn btn-success btn-block form-control">Gửi thông tin</button></td>
            </tr>
        </table>
    </form>
</div>
<script>
    $('#seller').submit(function(event){  
        event.preventDefault();  

        $.ajax({  
            url:"<?=base_url()?>web/addContact",  
            method:"POST",  
            data:$('#seller').serialize(),  
            success: function (data) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 2500
                });

                toast({
                    type: 'success',
                    title: 'Thông tin đã được gửi',
                });

                $('#seller').find('#contact_name').val('');
                $('#seller').find('#contact_phone').val('');
                $('#seller').find('#contact_email').val('');
                $('#seller').find('#contact_title').val('');
                $('#seller').find('textarea').val('');
            }
        });  

    });
</script>