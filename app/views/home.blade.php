@extends('layout')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Beware!</h1>
            <p>Improper use of this application can be a disaster. Its proper use is the best means to have backups of your Cpanel server. See help</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
    <div class="container">
        <!-- First row -->
        <div class="bs-example" data-example-id="thumbnails-with-custom-content" align="center">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/pubkey.png" class="img-responsive" alt="SSH key for the CpRsync system">
                        <div class="caption">
                            <h3>SSH Key</h3>
                            <p>SSH key management</p>
                            <p><a href="sshkey" class="btn btn-primary btn-sm" role="button">SSH Key</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/settings.png" class="img-responsive" alt="Config setting for Cprsync system">
                        <div class="caption">
                            <h3>Settings</h3>
                            <p>Rsync system configuration Cp.</p>
                            <p><a href="#" class="btn btn-primary btn-sm" role="button">Settings</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/status.png" class="img-responsive" alt="Status CpRsync System and Logs">
                        <div class="caption">
                            <h3>Status & Logs</h3>
                            <p>System status and log review copies</p>
                            <p><a href="#" class="btn btn-primary btn-sm" role="button">Status</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second row -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/settings.png" class="img-responsive" alt="Full Backup & Restore">
                        <div class="caption">
                            <h3>Full actions</h3>
                            <p>Full Backup & Restore</p>
                            <p><a href="#" class="btn btn-primary btn-sm" role="button">Full Backup & Restore</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/accounts.png" class="img-responsive" alt="Account actions">
                        <div class="caption">
                            <h3>Account actions</h3>
                            <p>Backup & Restore by account</p>
                            <p><a href="#" class="btn btn-primary btn-sm" role="button">Account actions</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/partialrestore.png" class="img-responsive" alt="Partial restore (account only)">
                        <div class="caption">
                            <h3>Partial restore</h3>
                            <p>Select that restores an account</p>
                            <p><a href="#" class="btn btn-primary btn-sm" role="button">Partial restore</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /container -->
@endsection
