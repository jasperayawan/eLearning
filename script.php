<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    function submitData(){
        $(document).ready(function(){
            const data = {
                name: $('#name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                action: $('#action').val(),
            };

            const myModal = document.getElementById('modal_login');
            const modal = bootstrap.Modal.getInstance(myModal);
            
            $("#registerBtn").val('Please wait...')
            $.ajax({
                url: './server/db_config.php',
                type: 'post',
                data: data,
                success: function(res){
                    alert(res);

                    if(res == "Login Successfully!"){
                        $("#registerBtn").val('Register')
                        modal.hide();
                        data.reset();
                    }
                    
                }
            })
        });
    }
</script>