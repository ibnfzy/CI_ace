<?= $this->extend('admin/base'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <?= form_open('U/Admin/' . $admin['id_admin'], [
            'class' => 'form-horizontal',
            'role' => 'form'
        ], [
            '_method' => 'PUT'
        ]); ?>
        <div class="form-group">
            <label for="fullname" class="col-sm-3 control-label no-padding-right">Fullname</label>
            <div class="col-sm-9">
                <?= form_input('fullname', $admin['fullname'], [
                    'class' => 'col-xl-10 col-sm-5',
                    'placeholder' => 'Masukkan nama lengkap'
                ]); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="uname" class="col-sm-3 control-label no-padding-right">Username</label>
            <div class="col-sm-9">
                <?= form_input('username', $admin['username'], [
                    'class' => 'col-xl-10 col-sm-5',
                    'placeholder' => 'Masukkan Username'
                ]); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="pwd" class="col-sm-3 control-label no-padding-right">Password</label>
            <div class="col-sm-9">
                <?= form_input('password', '', [
                    'class' => 'col-xl-10 col-sm-5',
                    'placeholder' => 'Password Lama'
                ], 'password'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="konfirmasiPassword" class="col-sm-3 control-label no-padding-right">Konfirmasi Password</label>
            <div class="col-sm-9">
                <?= form_input('konfirmasiPassword', '', [
                    'class' => 'col-xl-10 col-sm-5',
                    'placeholder' => 'Konfirmasi Password'
                ], 'password'); ?>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Submit
                </button>

                &nbsp; &nbsp; &nbsp;
                <a class="btn" onclick="history.back()">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Kembali
                </a>
            </div>
        </div>
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div>

<?= $this->endSection(); ?>