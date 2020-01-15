<?php
    require 'includes/head.php';
?>

<html>
    <head>

    </head>
    <body>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
            Login
        </button>

        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registerModal">
            Register
        </button>

        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>E-Mailadress</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>