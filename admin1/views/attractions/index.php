<main class="content">
                    <div class="container-fluid">

                        <div class="header">
                            <h1 class="header-title">
                                Create Attraction Section
                            </h1>

                        </div>

                        <!--From start-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" style="margin-top: 20px;">


                                    <form enctype="multipart/form-data" id="form-data" method="post">



                                        <input type="hidden" class="form-control"  name="create">


                                        <div class="row">
                                          
                                            <div class="mb-3 col-md-12">
                                                <label for="inputEmail4">Attraction Name</label>
                                                <input type="text" class="form-control"  id="short" name="short" >
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="inputPassword4">Image</label>
                                                <input type="file" class="form-control"  id="image" name="image">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="inputPassword4">Location</label>
                                                <input type="text" class="form-control"  name="description" id="description">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="inputPassword4">Description</label>
                                                <input type="text" class="form-control"  name="description" id="description">
                                            </div>


                                        </div>

                                        <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
                                        <button type="submit" id="create" class="btn btn-primary">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>




                    </div>
                </main>