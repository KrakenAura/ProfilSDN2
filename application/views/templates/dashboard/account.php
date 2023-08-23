            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <style>
                .password-input-container {
                    display: flex;
                    align-items: center;
                }

                #password-input {
                    border: none;
                    outline: none;
                    background: none;
                    padding: 0;
                }

                .toggle-password {
                    cursor: pointer;
                    font-size: 1.2rem;
                }

                .password-hidden #password-input {
                    font-size: 0;
                }
            </style>

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Data</strong> Akun</h1>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="<?= base_url('assets/Admin/img/avatars/Profile.png') ?>" class="mb-4" style="max-width:50%;">
                    </div>
                    <div class="col-8">
                        <table class="table align-middle">
                            <tr>
                                <th class="">Username</th>
                                <td class=" w-5">&nbsp :</td>
                                <td class="" style="padding-left: 25px;"><?php echo $auth['username'] ?></td>

                            </tr>
                            <tr>
                                <th class="">Password</th>
                                <td class=" w-5">&nbsp :</td>
                                <td class="password-field" style="padding-left: 25px;">
                                    <div class="password-input-container">
                                        <input type="password" id="password-input" value="<?php echo $auth['password'] ?>" readonly>
                                        <div class="toggle-eye">
                                            <ion-icon name="eye-outline" class="toggle-password"></ion-icon>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-primary btn-overlay" data-bs-toggle="modal" data-bs-target="#AccountModal">Edit Akun</button>
                    </div>
                </div>
            </main>

            <div class="modal fade" id="AccountModal" tabindex="-1" aria-labelledby="AccountModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AccountModalLabel">Edit Akun</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('index.php/DashboardController/edit'); ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                const passwordInput = document.getElementById('password-input');
                const toggleIcons = document.querySelectorAll('.toggle-password');
                toggleIcons.forEach(icon => {
                    icon.addEventListener('click', () => {
                        passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
                        passwordInput.focus();
                    });
                });
            </script>