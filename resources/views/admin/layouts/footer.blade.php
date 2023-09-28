<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Qurban Traders
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by UYM TECH
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    // Check if a success or error message is present in the session
    var successMessage = '{{ Session::get("success") }}';
    var errorMessage = '{{ Session::get("error") }}';

    if (successMessage !== '') {
        Snackbar.show({
            pos: 'bottom-center',
            text: successMessage,
            backgroundColor: '#8bd2a4',
            actionTextColor: '#fff'
        });
    }

    if (errorMessage !== '') {
        Snackbar.show({
            pos: 'bottom-center',
            text: errorMessage,
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
    }
});
</script>