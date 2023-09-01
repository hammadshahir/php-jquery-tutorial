<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>PHP jQuery Example</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Add Record Modal -->
        <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="completeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="completeModal">Add A User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="userFirstName" class="form-label">First name:</label>
                            <input type="text" class="form-control" id="userFirstName" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userLastName" class="form-label">Last name:</label>
                            <input type="text" class="form-control" id="userLastName" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userEmail" class="form-label">Email address:</label>
                            <input type="email" class="form-control" id="userEmail" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userPhone" class="form-label">Phone:</label>
                            <input type="text" class="form-control" id="userPhone" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userCity" class="form-label">City:</label>
                            <input type="text" class="form-control" id="userCity" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userState" class="form-label">State:</label>
                            <input type="text" class="form-control" id="userState" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userCountry" class="form-label">Country:</label>
                            <input type="text" class="form-control" id="userCountry" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="userZipCode" class="form-label">Zip Code:</label>
                            <input type="text" class="form-control" id="userZipCode" />
                        </div>
                        
                        <div class="modal-footer mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button onclick = "addUser()" type="button" class="btn btn-primary">Add User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Add Record Modal -->

        <!-- Update Record Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModal">Update a Record</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="updateUserFirstName" class="form-label">First name:</label>
                            <input type="text" class="form-control" id="updateUserFirstName" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserLastName" class="form-label">Last name:</label>
                            <input type="text" class="form-control" id="updateUserLastName" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserEmail" class="form-label">Email address:</label>
                            <input type="email" class="form-control" id="updateUserEmail" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserPhone" class="form-label">Phone:</label>
                            <input type="text" class="form-control" id="updateUserPhone" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserCity" class="form-label">City:</label>
                            <input type="text" class="form-control" id="updateUserCity" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserState" class="form-label">State:</label>
                            <input type="text" class="form-control" id="updateUserState" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserCountry" class="form-label">Country:</label>
                            <input type="text" class="form-control" id="updateUserCountry" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="updateUserZipCode" class="form-label">Zip Code:</label>
                            <input type="text" class="form-control" id="updateUserZipCode" />
                        </div>
                        
                        <div class="modal-footer mb-3">
                            <button onclick = "updateRecord()" type="button" class="btn btn-success">Update</button>
                            <input type="hidden" id="hiddenData">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Update Record Modal -->

        <div class="container my-3">
            <h1 text-center>PHP / Boostrap / jQuery CRUD Example</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#completeModal">
                Add Record
            </button>

            <div id="displayDataTable">

            </div>
        </div>
        <!-- End of Container -->

        <!-- Bootstrap JavaScript -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JavaScript -->
        <script src="custom.js"></script>
    </body>
</html>
