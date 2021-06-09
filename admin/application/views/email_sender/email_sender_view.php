<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('email_sender/send'); ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="input[user_input]" value="<?= $user['id']; ?>">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">To</label>
                        <div class="col-sm-10">
                            <input type="icon" class="form-control" name="input[to]" id="icon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="menu_id" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="icon" class="form-control" name="input[subject]" id="icon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label">Mail</label>
                        <div class="col-sm-10">
                            <textarea name="input[mail]"></textarea>
                            <script>
                                CKEDITOR.replace('input[mail]', {
                                    on: {
                                        instanceReady: function(ev) {
                                            // Output paragraphs as <p>Text</p>.
                                            this.dataProcessor.writer.setRules('p', {
                                                indent: false,
                                                breakBeforeOpen: true,
                                                breakAfterOpen: false,
                                                breakBeforeClose: false,
                                                breakAfterClose: true
                                            });
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <input type="hidden" name="id" v>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger ">Kirim <span class="fa fa-paper-plane"></span></button>
                    </div>
            </form>
        </div>
    </di>
</div>
</div>
<script>
    $(document).ready(function() {
        var id = "<?= $submenu['menu_id']; ?>";
        console.log(id);
        $("#menu_id option[value='" + id + "'").attr('selected', 'selected');
    });
</script>