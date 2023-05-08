<?php 
 if(!empty($get_banner->image) && file_exists('uploads/banner/'.$get_banner->image)){
     $banner_img=base_url("uploads/banner/".$get_banner->image);
            } else{
       $banner_img=base_url("assets/images/resource/mslider1.jpg");
        } ?>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= $banner_img ?>') repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>List of workers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding List_Of_Workers">
        <div class="container">
            <div class="row no-gape">
                <div class="col-lg-12 column">
                    <div class="padding-left">
                        <div class="emply-resume-sec">
                            <div id="worker_list">

                            </div>

                            <!-- pagination start -->

                            <div align="center" id="pagination_link">

                            </div>

                            <!-- end pagination -->
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
<script>
    $(document).ready(function () {

        filter_data(1);
        //alert('hii'); return false;
        function filter_data(page) {
            var base_url = $("#base_url").val();
            var displayProduct = 5;
            $('#worker_list').html(createSkeleton(displayProduct));

            function createSkeleton(limit) {
                var skeletonHTML = '';
                for (var i = 0; i < limit; i++) {
                    skeletonHTML += '<div class="ph-item">';
                    skeletonHTML += '<div class="ph-col-4">';
                    skeletonHTML += '<div class="ph-picture"></div>';
                    skeletonHTML += '</div>';
                    skeletonHTML += '<div>';
                    skeletonHTML += '<div class="ph-row">';
                    skeletonHTML += '<div class="ph-col-12 big"></div>';
                    skeletonHTML += '<div class="ph-col-12"></div>';
                    skeletonHTML += '<div class="ph-col-12"></div>';
                    skeletonHTML += '<div class="ph-col-12"></div>';
                    skeletonHTML += '<div class="ph-col-12"></div>';
                    skeletonHTML += '</div>';
                    skeletonHTML += '</div>';
                    skeletonHTML += '</div>';
                }
                return skeletonHTML;
            }
            var action = 'fetch_data';
            $.ajax({
                url: base_url + "home/workerlist_fetchdata/" + page,
                method: "POST",
                dataType: "JSON",
                data: {
                    action: action
                },
                success: function (data) {
                    $('#worker_list').html(data.product_list);
                    $('#pagination_link').html(data.pagination_link);
                }
            })
        }


        $(document).on('click', '.pagination li a', function (event) {
            event.preventDefault();
            var page = $(this).data('ci-pagination-page');
            filter_data(page);
        });


    });
</script>