<!-- Quick View Modal Modal  -->
<div class="modal fade" id="QuickViewModal" data-backdrop="static" style="background: #262525a1;" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-body pb-0">
        <div class=" quickView-container p-0 overflow-hidden">
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: -12px; right: 8px; padding: 0px 2px; z-index:999;">
          <div class="css-1uu6dpv p-0">
            <svg viewBox="0 0 24 24" class="css-1oql73n">
              <title></title>
              <circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
              <path d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z" fill="#001325" fill-opacity="0.92"></path>
            </svg>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Quick View Modal Modal end -->
<!-- Write Review Modal Modal start -->
<div class="modal fade" id="ReviewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background: rgb(38 37 37 / 57%);">
  <form action="<?php echo base_url($this->data->controller . '/AddReview'); ?>" method="post" enctype="multipart/form-data" class="addReview">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="border: 0px;">
          <p class="modal-title" id="staticBackdropLabel">Write a review</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed;top: 10px; right: 20px; padding: 0px 2px; z-index:999;">
            <div class="css-1uu6dpv p-0">
              <svg viewBox="0 0 24 24" class="css-1oql73n">
                <title></title>
                <circle cx="12" cy="12" r="10" fill="#001325" fill-opacity="0.16"></circle>
                <path d="M8.41258 8.41258C8.10777 8.71739 8.10777 9.21159 8.41258 9.5164L10.8042 11.908L8.22861 14.4836C7.9238 14.7884 7.9238 15.2826 8.22861 15.5874C8.53342 15.8922 9.02762 15.8922 9.33243 15.5874L11.908 13.0118L14.6676 15.7714C14.9724 16.0762 15.4666 16.0762 15.7714 15.7714C16.0762 15.4666 16.0762 14.9724 15.7714 14.6676L13.0118 11.908L15.5874 9.33243C15.8922 9.02762 15.8922 8.53342 15.5874 8.22861C15.2826 7.9238 14.7884 7.9238 14.4836 8.22861L11.908 10.8042L9.5164 8.41258C9.21159 8.10777 8.71739 8.10777 8.41258 8.41258Z" fill="#001325" fill-opacity="0.92"></path>
              </svg>
            </div>
          </button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </form>
</div>
<!-- Write Review Modal Modal end -->

<!--Product Notify modal-->
<div class="modal fade" id="NotifyProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header " id="giftModal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <h2 class="text-center"> Notify Me</h2>
        <p style="font-size : 12px;">Please share your contact information so we can alert you when the product is back
          in stock.</p>
        <div class="form-group">
          <input class="form-control" type="email" placeholder="Enter your email">
        </div>
        <p class="text-center" style="font-weight:normal">OR</p>
        <div class="form-group">
          <input class="form-control" type="number" placeholder="Enter your mobile no">
        </div>


        <div class="form-group">
          <p class="text-right"><button class="btn btn-secondary">Submit</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Product Notify modal end-->
<!--coupon model start-->
<div class="modal fade  come-from-modal right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

  </div>
</div>
<!--coupon model end-->

<!-- All custom scripts here -->
<!-- Plugins JS File -->
<script src="<?= base_url('assets/website/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.hoverIntent.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/superfish.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/bootstrap-input-spinner.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.elevateZoom.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/bootstrap-input-spinner.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.plugin.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.countdown.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/e-search.js') ?>"></script>
<script src="<?= base_url('assets/website/js/copy_on_click.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.copiq.js') ?>"></script>
<script src="<?= base_url('assets/website/js/demos/demo-7.js') ?>"></script>
<script src="<?= base_url('assets/website/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Main JS File -->
<script src="<?= base_url('assets/website/js/main.js') ?>"></script>

<script src="<?= base_url('assets/website/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/sweetalert.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/notify.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/parsley.js') ?>"></script>
<script src="<?= base_url('assets/website/js/scripts.js') ?>"></script>
<script src="<?= base_url('assets/website/js/form.js') ?>"></script>
<script src="<?= base_url('assets/website/js/lazyLoader.js') ?>"></script>
<script src="<?= base_url('assets/website/js/jquery.lazy.min.js') ?>"></script>
<script src="<?= base_url('assets/website/js/toastr.min.js') ?>"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/Drift.min.js"></script>
<script src="<?= base_url('assets/website/js/custom.js') ?>"></script>

<!-- algolia plugin -->
<script src="https://cdn.jsdelivr.net/npm/preact@10.5.14/dist/preact.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.14.0/dist/algoliasearch-lite.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>
<script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-plugin-query-suggestions"></script>
<script src="https://unpkg.com/@algolia/autocomplete-plugin-recent-searches"></script>
<script src="<?= base_url('assets/new_website/js/algolia-config.js') ?>"></script>




<script>
  $(document).ready(function() {
    $('.btn-cart').click(function() {
      var a = $(this).parent().parent().find('.add-product').addClass('open');

    })
    $('.closeQuickAdd').click(function() {
      var a = $(this).parent().parent().parent().parent().removeClass('open');
    })
  })
</script>
<style>
  .form-content {
    display: none;
  }
</style>
<script>
  $(document).ready(function() {
    $('form').parsley();
  });

  jQuery('[data-toggle="tooltip"]').click(function() {
    jQuery('[data-toggle="tooltip"]').tooltip("hide");

  });

  jQuery('[data-toggle="popover-hover"]').popover({
    trigger: 'click',
  })


  jQuery(function() {
    jQuery('.popup-youtube, .popup-vimeo').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  });

  // filter searchbar initilization  
  $('.filter-search-inputBox').focus(function() {
    container = $(this).parent().parent().parent();
    item = $(this).parent().parent().find('.filter-item');
    container.lookingfor({
      input: $(this),
      items: item,
      highlight: false
    });
  })
</script>
<script>
  function Edit(id) {
    jQuery("#EditModal").modal("show");
    jQuery("#EditModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
    jQuery("#EditModal .modal-body").load(
      "<?php echo base_url($this->data->controller . '/' . $this->data->method . '/EditAddress/') ?>" + id);
  }

  function CouponTermsConditions(id, status) {
    jQuery("#CouponTermsConditionsModal").modal("show");
    jQuery("#CouponTermsConditionsModal .modal-body").html(
      "<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
    jQuery("#CouponTermsConditionsModal .modal-body").load(
      "<?php echo base_url($this->data->controller . '/' . $this->data->method . '/CouponTermsConditions/') ?>" + id +
      '/' + status);
  }

  function WriteReview(id, type) {
    $("#ReviewModal .modal-body").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
    $("#ReviewModal .modal-body").load(
      "<?php echo base_url($this->data->controller . '/' . $this->data->method . '/WriteReview/') ?>" + id + '/' + type);
  }
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
  // <?php if ($this->sitepermission->chat_support) { ?>
  //   var Tawk_API = Tawk_API || {},
  //     Tawk_LoadStart = new Date();
  //   (function() {
  //     var s1 = document.createElement("script"),
  //       s0 = document.getElementsByTagName("script")[0];
  //     s1.async = true;
  //     s1.src = 'https://embed.tawk.to/6284c6ed7b967b11798ff6d6/1g3bai4m3';
  //     s1.charset = 'UTF-8';
  //     s1.setAttribute('crossorigin', '*');
  //     s0.parentNode.insertBefore(s1, s0);
  //   })();
  // <?php } ?>

  jQuery("#giftpackage").click(function() {
    jQuery(".form-content").show();
  });
  jQuery("#cancle").click(function() {
    jQuery(".form-content").hide();
  })


  function Delete(e, table, where_column, where_value, unlink_folder, unlink_column) {
    var status = true;
    swal({
      title: "Are you sure?",
      text: "You want to delete this !",
      icon: "warning",
      buttons: true,
      dangerMode: true
    }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: "<?php echo base_url("Auth/Delete"); ?>",
          type: "post",
          data: {
            'table': table,
            'where_column': where_column,
            'where_value': where_value,
            'unlink_folder': unlink_folder,
            'unlink_column': unlink_column
          },
          success: function(response) {
            swal("Deleted successfully !", {
              icon: "success",
            });
            location.reload();
          }
        });
      }
    });
    return status;
  }

  function Remove(e, table, where_column, where_value, unlink_folder, unlink_column) {
    var status = true;

    $.ajax({
      url: "<?php echo base_url("Auth/Delete"); ?>",
      type: "post",
      data: {
        'table': table,
        'where_column': where_column,
        'where_value': where_value,
        'unlink_folder': unlink_folder,
        'unlink_column': unlink_column
      },
      success: function(response) {
        swal("Deleted successfully !", {
          icon: "success",
        });
        location.reload();
      }
    });
    return status;
  }

  // quick view code
  function quickView(id, type) {
    $(".quickView-container").html("<center><i class='fa fa-2x fa-spin fa-spinner'></i></center>");
    if (type == 'Combo') {
      path = "<?php echo base_url($this->data->controller . '/QuickView/Combo/') ?>" + id
    } else {
      path = "<?php echo base_url($this->data->controller . '/QuickView/Individual/') ?>" + id
    }
    $.ajax({
      url: path,
      type: "get",
      success: function(response) {

        $('.quickView-container').html(response);
        // reinitilize js
        $('.quick-view-img').owlCarousel({
          loop: false,
          autoplay: false,
          nav: true,
          dots: false,
          items: 1,
          navText: [
            '<i class="fa-solid fa-angle-left" style="color:#8340A1; font-size: 22px;"></i>',
            '<i class="fa-solid fa-angle-right" style="color: #8340A1; font-size: 22px;"></i>'
          ],

        })
        $('.popup-size').owlCarousel({
          loop: false,
          autoplay: false,
          nav: false,
          dots: false,
          responsive: {
            0: {
              items: 5.2,

            },
            460: {
              items: 5.5,
            },
            768: {
              items: 5.5,
            },
            1000: {
              items: 6.2,
            }
          },

        })
        $('.popup-colors').owlCarousel({
          loop: false,
          autoplay: false,
          nav: false,
          dots: false,
          responsive: {
            0: {
              items: 3.2,

            },
            460: {
              items: 4.2,
            },
            768: {
              items: 3.2,
            },
            1000: {
              items: 4.2,
            }
          },
        })
        $('form').parsley();
        $('.addForm').on('submit', function(e) {

          var formAction = $(this);
          var btnAction = $('#addBtn');
          var spinAction = $('#addSpin');
          e.preventDefault();
          var data = new FormData(this);
          if ($(formAction).parsley().isValid() == true) {
            $.ajax({
              type: 'POST',
              url: $(formAction).attr('action'),
              data: data,
              cache: false,
              contentType: false,
              processData: false,
              beforeSend: function() {
                $(btnAction).attr("disabled", true);
                $(spinAction).show();
              },
              success: function(response) {
                console.log(response);
                var response = JSON.parse(response);
                $(btnAction).removeAttr("disabled");
                $(spinAction).hide();
                if (response[0].res == 'success') {

                  $('.notifyjs-wrapper').remove();
                  $.notify("" + response[0].msg + "", "success");
                  if (response[0].redirect) {
                    window.setTimeout(function() {
                      window.location.href = response[0].redirect;
                    }, 1000);
                  } else {
                    window.setTimeout(function() {
                      window.location.reload();
                    }, 1000);
                  }
                } else if (response[0].res == 'error') {
                  $('.notifyjs-wrapper').remove();
                  $.notify("" + response[0].msg + "", "error");
                  if (response[0].redirect) {
                    window.setTimeout(function() {
                      window.location.href = response[0].redirect;
                    }, 1000);
                  }
                }
              },
              error: function() {
                // window.location.reload();
              }
            });
          }
        });

        function AddToWishlist(id, type) {
          if (type == 'combo') {
            path = "<?php echo base_url($this->data->controller . '/ProductDetails/AddToComboWishlist/') ?>" + id
          } else {
            path = "<?php echo base_url($this->data->controller . '/ProductDetails/AddToWishlist/') ?>" + id
          }
          $.ajax({
            url: path,
            type: "post",
            data: {
              id: id
            },
            success: function(response) {
              console.log(response);
              var response = JSON.parse(response);
              if (response[0].res == 'success') {
                $('.notifyjs-wrapper').remove();
                $.notify("" + response[0].msg + "", "success");
              } else if (response[0].res == 'error') {
                $('.notifyjs-wrapper').remove();
                $.notify("" + response[0].msg + "", "error");
                if (response[0].redirect) {
                  window.setTimeout(function() {
                    window.location.href = response[0].redirect;
                  }, 1000);
                }
              }
            }
          });
        }
      }
    });
  }


  function AddToWishlist(id, type) {
    if (type == 'combo') {
      path = "<?php echo base_url($this->data->controller . '/ProductDetails/AddToComboWishlist/') ?>" + id
    } else {
      path = "<?php echo base_url($this->data->controller . '/ProductDetails/AddToWishlist/') ?>" + id
    }
    $.ajax({
      url: path,
      type: "post",
      data: {
        id: id
      },
      success: function(response) {
        console.log(response);
        var response = JSON.parse(response);
        if (response[0].res == 'success') {
          $('.notifyjs-wrapper').remove();
          $.notify("" + response[0].msg + "", "success");
        } else if (response[0].res == 'error') {
          $('.notifyjs-wrapper').remove();
          $.notify("" + response[0].msg + "", "error");
          if (response[0].redirect) {
            window.setTimeout(function() {
              window.location.href = response[0].redirect;
            }, 1000);
          }
        }
      }
    });
  }

  function MoveToWishlist(id, type) {

    path = "<?php echo base_url($this->data->controller . '/Cart/MoveToWishlist/') ?>" + id
    $.ajax({
      url: path,
      type: "post",
      data: {
        id: id,
        type: type
      },
      success: function(response) {
        var response = JSON.parse(response);
        if (response[0].res == 'success') {
          $('.notifyjs-wrapper').remove();
          $.notify("" + response[0].msg + "", "success");
        } else if (response[0].res == 'error') {
          $('.notifyjs-wrapper').remove();
          $.notify("" + response[0].msg + "", "error");
          if (response[0].redirect) {
            window.setTimeout(function() {
              window.location.href = response[0].redirect;
            }, 1000);
          } else {
            window.setTimeout(function() {
              window.location.reload();
            }, 1000);
          }
        }
      }
    })
  }

  $('.addForm').on('submit', function(e) {
    // alert(1);
    var formAction = $(this);
    var btnAction = $('.addBtn');
    var spinAction = $('.addSpin');
    e.preventDefault();
    var data = new FormData(this);
    if ($(formAction).parsley().isValid() == true) {
      $.ajax({
        type: 'POST',
        url: $(formAction).attr('action'),
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(btnAction).attr("disabled", true);
          $(spinAction).show();
        },
        success: function(response) {

          var response = JSON.parse(response);
          console.log(response);
          $(btnAction).removeAttr("disabled");
          $(spinAction).hide();
          if (response[0].res == 'success') {

            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "success");
            if (response[0].redirect) {
              window.setTimeout(function() {
                window.location.href = response[0].redirect;
              }, 1000);
            } else {
              window.setTimeout(function() {
                window.location.reload();
              }, 1000);
            }
          } else if (response[0].res == 'error') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "error");
            if (response[0].redirect) {
              window.setTimeout(function() {
                window.location.href = response[0].redirect;
              }, 1000);
            }
          }
        },
        error: function() {
          // window.location.reload();
        }
      });
    }
  });
  $('#updateForm').on('submit', function(e) {
    e.preventDefault();
    var data = new FormData(this);
    var formAction = $(this);
    var btnAction = $('#updateBtn');
    var spinAction = $('#updateSpin');
    // if ($(formAction).parsley().isValid() == true) {
    if ($(formAction).parsley().isValid() == true) {
      $.ajax({
        type: 'POST',
        url: $(formAction).attr('action'),
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(btnAction).attr("disabled", true);
          $(spinAction).show();
        },
        success: function(response) {
          console.log(response);
          var response = JSON.parse(response);
          $(btnAction).removeAttr("disabled");
          $(spinAction).hide();
          if (response[0].res == 'success') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "success");
            if (response[0].redirect) {
              window.setTimeout(function() {
                window.location.href = response[0].redirect;
              }, 1000);
            } else {
              window.setTimeout(function() {
                window.location.reload();
              }, 1000);
            }
          } else if (response[0].res == 'error') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "error");
          }
        },
        error: function() {
          // window.location.reload();
        }
      });
    }
  });



  $('#addForm2').on('submit', function(e) {
    var formAction = $(this);
    var btnAction = $('#addBtn2');
    var spinAction = $('#addSpin2');
    e.preventDefault();
    var data = new FormData(this);
    if ($(formAction).parsley().isValid() == true) {
      $.ajax({
        type: 'POST',
        url: $(formAction).attr('action'),
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(btnAction).attr("disabled", true);
          $(spinAction).show();
        },
        success: function(response) {
          console.log(response);
          var response = JSON.parse(response);
          $(btnAction).removeAttr("disabled");
          $(spinAction).hide();
          if (response[0].res == 'success') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "success");
            if (response[0].redirect) {
              window.setTimeout(function() {
                window.location.href = response[0].redirect;
              }, 1000);
            } else {
              window.setTimeout(function() {
                window.location.reload();
              }, 1000);
            }
          } else if (response[0].res == 'error') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "error");
          }
        },
        error: function() {
          // window.location.reload();
        }
      });
    }
  });


  $('#updateForm2').on('submit', function(e) {
    e.preventDefault();
    var data = new FormData(this);
    var formAction = $(this);
    var btnAction = $('#updateBtn2');
    var spinAction = $('#updateSpin2');
    if ($(formAction).parsley().isValid() == true) {
      $.ajax({
        type: 'POST',
        url: $(formAction).attr('action'),
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(btnAction).attr("disabled", true);
          $(spinAction).show();
        },
        success: function(response) {
          console.log(response);
          var response = JSON.parse(response);
          $(btnAction).removeAttr("disabled");
          $(spinAction).hide();
          if (response[0].res == 'success') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "success");
            if (response[0].redirect) {
              window.setTimeout(function() {
                window.location.href = response[0].redirect;
              }, 1000);
            } else {
              window.setTimeout(function() {
                window.location.reload();
              }, 1000);
            }
          } else if (response[0].res == 'error') {
            $('.notifyjs-wrapper').remove();
            $.notify("" + response[0].msg + "", "error");
          }
        },
        error: function() {
          // window.location.reload();
        }
      });
    }
  });








  jQuery(document).ready(function() {
    print_state('sts');
  });

  var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh",
    "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh",
    "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur",
    "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu",
    "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");

  var s_a = new Array();
  s_a[0] = "";
  s_a[1] =
    `Alipur | Andaman Island | Anderson Island | Arainj-Laka-Punga | Austinabad | Bamboo Flat | Barren Island | Beadonabad |
  Betapur | Bindraban | Bonington | Brookesabad | Cadell Point | Calicut | Chetamale | Cinque Islands | Defence Island |
    Digilpur | Dolyganj | Flat Island | Geinyale | Great Coco Island | Haddo | Havelock Island | Henry Lawrence Island |
    Herbertabad | Hobdaypur | Ilichar | Ingoie | Inteview Island | Jangli Ghat | Jhon Lawrence Island | Karen | Kartara |
    KYD Islannd | Landfall Island | Little Andmand | Little Coco Island | Long Island | Maimyo | Malappuram | Manglutan |
    Manpur | Mitha Khari | Neill Island | Nicobar Island | North Brother Island | North Passage Island | North Sentinel
  Island | Nothen Reef Island | Outram Island | Pahlagaon | Palalankwe | Passage Island | Phaiapong | Phoenix Island |
    Port Blair | Preparis Island | Protheroepur | Rangachang | Rongat | Rutland Island | Sabari | Saddle Peak | Shadipur |
    Smith Island | Sound Island | South Sentinel Island | Spike Island | Tarmugli Island | Taylerabad | Titaije |
    Toibalawe |
    Tusonabad | West Island | Wimberleyganj | Yadita `;
  s_a[2] =
    `Achampet | Adilabad | Adoni | Alampur | Allagadda | Alur | Amalapuram | Amangallu | Anakapalle | Anantapur | Andole |
  Araku | Armoor | Asifabad | Aswaraopet | Atmakur | B.Kothakota | Badvel | Banaganapalle | Bandar | Bangarupalem |
    Banswada | Bapatla | Bellampalli | Bhadrachalam | Bhainsa | Bheemunipatnam | Bhimadole | Bhimavaram | Bhongir |
    Bhooragamphad | Boath | Bobbili | Bodhan | Chandoor | Chavitidibbalu | Chejerla | Chepurupalli | Cherial | Chevella |
    Chinnor | Chintalapudi | Chintapalle | Chirala | Chittoor | Chodavaram | Cuddapah | Cumbum | Darsi | Devarakonda |
    Dharmavaram | Dichpalli | Divi | Donakonda | Dronachalam | East Godavari | Eluru | Eturnagaram | Gadwal |
    Gajapathinagaram | Gajwel | Garladinne | Giddalur | Godavari | Gooty | Gudivada | Gudur | Guntur | Hindupur |
    Hunsabad |
    Huzurabad | Huzurnagar | Hyderabad | Ibrahimpatnam | Jaggayyapet | Jagtial | Jammalamadugu | Jangaon |
    Jangareddygudem |
    Jannaram | Kadiri | Kaikaluru | Kakinada | Kalwakurthy | Kalyandurg | Kamalapuram | Kamareddy | Kambadur |
    Kanaganapalle |
    Kandukuru | Kanigiri | Karimnagar | Kavali | Khammam | Khanapur(AP) | Kodangal | Koduru | Koilkuntla | Kollapur |
    Kothagudem | Kovvur | Krishna | Krosuru | Kuppam | Kurnool | Lakkireddipalli | Madakasira | Madanapalli | Madhira |
    Madnur | Mahabubabad | Mahabubnagar | Mahadevapur | Makthal | Mancherial | Mandapeta | Mangalagiri | Manthani |
    Markapur |
    Marturu | Medachal | Medak | Medarmetla | Metpalli | Mriyalguda | Mulug | Mylavaram | Nagarkurnool | Nalgonda |
    Nallacheruvu | Nampalle | Nandigama | Nandikotkur | Nandyal | Narasampet | Narasaraopet | Narayanakhed | Narayanpet |
    Narsapur | Narsipatnam | Nazvidu | Nelloe | Nellore | Nidamanur | Nirmal | Nizamabad | Nuguru | Ongole |
    Outsarangapalle |
    Paderu | Pakala | Palakonda | Paland | Palmaneru | Pamuru | Pargi | Parkal | Parvathipuram | Pathapatnam |
    Pattikonda |
    Peapalle | Peddapalli | Peddapuram | Penukonda | Piduguralla | Piler | Pithapuram | Podili | Polavaram | Prakasam |
    Proddatur | Pulivendla | Punganur | Putturu | Rajahmundri | Rajampeta | Ramachandrapuram | Ramannapet |
    Rampachodavaram |
    Rangareddy | Rapur | Rayachoti | Rayadurg | Razole | Repalle | Saluru | Sangareddy | Sathupalli | Sattenapalle |
    Satyavedu | Shadnagar | Siddavattam | Siddipet | Sileru | Sircilla | Sirpur Kagaznagar | Sodam | Sompeta |
    Srikakulam |
    Srikalahasthi | Srisailam | Srungavarapukota | Sudhimalla | Sullarpet | Tadepalligudem | Tadipatri | Tanduru |
    Tanuku |
    Tekkali | Tenali | Thungaturthy | Tirivuru | Tirupathi | Tuni | Udaygiri | Ulvapadu | Uravakonda | Utnor | V.R.Puram |
    Vaimpalli | Vayalpad | Venkatgiri | Venkatgirikota | Vijayawada | Vikrabad | Vinjamuru | Vinukonda | Visakhapatnam |
    Vizayanagaram | Vizianagaram | Vuyyuru | Wanaparthy | Warangal | Wardhannapet | Yelamanchili | Yelavaram |
    Yeleswaram |
    Yellandu | Yellanuru | Yellareddy | Yerragondapalem | Zahirabad`;
  s_a[3] =
    `Along | Anini | Anjaw | Bameng | Basar | Changlang | Chowkhem | Daporizo | Dibang Valley | Dirang | Hayuliang | Huri |
  Itanagar | Jairampur | Kalaktung | Kameng | Khonsa | Kolaring | Kurung Kumey | Lohit | Lower Dibang Valley | Lower
  Subansiri | Mariyang | Mechuka | Miao | Nefra | Pakkekesang | Pangin | Papum Pare | Passighat | Roing | Sagalee |
    Seppa |
    Siang | Tali | Taliha | Tawang | Tezu | Tirap | Tuting | Upper Siang | Upper Subansiri | Yiang Kiag`;
  s_a[4] =
    `Abhayapuri | Baithalangshu | Barama | Barpeta Road | Bihupuria | Bijni | Bilasipara | Bokajan | Bokakhat | Boko |
  Bongaigaon | Cachar | Cachar Hills | Darrang | Dhakuakhana | Dhemaji | Dhubri | Dibrugarh | Digboi | Diphu | Goalpara |
    Gohpur | Golaghat | Guwahati | Hailakandi | Hajo | Halflong | Hojai | Howraghat | Jorhat | Kamrup | Karbi Anglong |
    Karimganj | Kokarajhar | Kokrajhar | Lakhimpur | Maibong | Majuli | Mangaldoi | Mariani | Marigaon | Moranhat |
    Morigaon |
    Nagaon | Nalbari | Rangapara | Sadiya | Sibsagar | Silchar | Sivasagar | Sonitpur | Tarabarihat | Tezpur | Tinsukia |
    Udalgiri | Udalguri | UdarbondhBarpeta`;
  s_a[5] =
    `Adhaura | Amarpur | Araria | Areraj | Arrah | Arwal | Aurangabad | Bagaha | Banka | Banmankhi | Barachakia | Barauni |
  Barh | Barosi | Begusarai | Benipatti | Benipur | Bettiah | Bhabhua | Bhagalpur | Bhojpur | Bidupur | Biharsharif |
    Bikram | Bikramganj | Birpur | Buxar | Chakai | Champaran | Chapara | Dalsinghsarai | Danapur | Darbhanga |
    Daudnagar |
    Dhaka | Dhamdaha | Dumraon | Ekma | Forbesganj | Gaya | Gogri | Gopalganj | H.Kharagpur | Hajipur | Hathua | Hilsa |
    Imamganj | Jahanabad | Jainagar | Jamshedpur | Jamui | Jehanabad | Jhajha | Jhanjharpur | Kahalgaon | Kaimur(Bhabua) |
    Katihar | Katoria | Khagaria | Kishanganj | Korha | Lakhisarai | Madhepura | Madhubani | Maharajganj | Mahua |
    Mairwa |
    Mallehpur | Masrakh | Mohania | Monghyr | Motihari | Motipur | Munger | Muzaffarpur | Nabinagar | Nalanda |
    Narkatiaganj |
    Naugachia | Nawada | Pakribarwan | Pakridayal | Patna | Phulparas | Piro | Pupri | Purena | Purnia | Rafiganj |
    Rajauli | Ramnagar | Raniganj | Raxaul | Rohtas | Rosera | S.Bakhtiarpur | Saharsa | Samastipur | Saran | Sasaram |
    Seikhpura | Sheikhpura | Sheohar | Sherghati | Sidhawalia | Singhwara | Sitamarhi | Siwan | Sonepur | Supaul |
    Thakurganj | Triveniganj | Udakishanganj | Vaishali | Wazirganj`;
  s_a[6] = `Chandigarh | Mani Marja`;
  s_a[7] =
    `Ambikapur | Antagarh | Arang | Bacheli | Bagbahera | Bagicha | Baikunthpur | Balod | Balodabazar | Balrampur |
  Barpalli | Basana | Bastanar | Bastar | Bderajpur | Bemetara | Berla | Bhairongarh | Bhanupratappur | Bharathpur |
    Bhatapara | Bhilai | Bhilaigarh | Bhopalpatnam | Bijapur | Bilaspur | Bodla | Bokaband | Chandipara | Chhinagarh |
    Chhuriakala | Chingmut | Chuikhadan | Dabhara | Dallirajhara | Dantewada | Deobhog | Dhamda | Dhamtari |
    Dharamjaigarh |
    Dongargarh | Durg | Durgakondal | Fingeshwar | Gariaband | Garpa | Gharghoda | Gogunda | Ilamidi | Jagdalpur |
    Janjgir |
    Janjgir - Champa | Jarwa | Jashpur | Jashpurnagar | Kabirdham - Kawardha | Kanker | Kasdol | Kathdol | Kathghora |
    Kawardha |
    Keskal | Khairgarh | Kondagaon | Konta | Korba | Korea | Kota | Koyelibeda | Kuakunda | Kunkuri | Kurud |
    Lohadigundah |
    Lormi | Luckwada | Mahasamund | Makodi | Manendragarh | Manpur | Marwahi | Mohla | Mungeli | Nagri | Narainpur |
    Narayanpur | Neora | Netanar | Odgi | Padamkot | Pakhanjur | Pali | Pandaria | Pandishankar | Parasgaon | Pasan |
    Patan |
    Pathalgaon | Pendra | Pratappur | Premnagar | Raigarh | Raipur | Rajnandgaon | Rajpur | Ramchandrapur | Saraipali |
    Saranggarh | Sarona | Semaria | Shakti | Sitapur | Sukma | Surajpur | Surguja | Tapkara | Toynar | Udaipur | Uproda |
    Wadrainagar`;
  s_a[8] =
    `Amal | Amli | Bedpa | Chikhli | Dadra & Nagar Haveli | Dahikhed | Dolara | Galonda | Kanadi | Karchond | Khadoli |
  Kharadpada | Kherabari | Kherdi | Kothar | Luari | Mashat | Rakholi | Rudana | Saili | Sili | Silvassa | Sindavni |
    Udva |
    Umbarkoi | Vansda | Vasona | Velugam`;
  s_a[9] = `Brancavare | Dagasi | Daman | Diu | Magarvara | Nagwa | Pariali | Passo Covo `;
  s_a[10] =
    `Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | South Delhi | South West
  Delhi | West Delhi `;
  s_a[11] =
    `Canacona | Candolim | Chinchinim | Cortalim | Goa | Jua | Madgaon | Mahem | Mapuca | Marmagao | Panji | Ponda |
  Sanvordem | Terekhol `;
  s_a[12] =
    `Ahmedabad | Ahwa | Amod | Amreli | Anand | Anjar | Ankaleshwar | Babra | Balasinor | Banaskantha | Bansada | Bardoli |
  Bareja | Baroda | Barwala | Bayad | Bhachav | Bhanvad | Bharuch | Bhavnagar | Bhiloda | Bhuj | Billimora | Borsad |
    Botad | Chanasma | Chhota Udaipur | Chotila | Dabhoi | Dahod | Damnagar | Dang | Danta | Dasada | Dediapada | Deesa |
    Dehgam | Deodar | Devgadhbaria | Dhandhuka | Dhanera | Dharampur | Dhari | Dholka | Dhoraji | Dhrangadhra | Dhrol |
    Dwarka | Fortsongadh | Gadhada | Gandhi Nagar | Gariadhar | Godhra | Gogodar | Gondal | Halol | Halvad | Harij |
    Himatnagar | Idar | Jambusar | Jamjodhpur | Jamkalyanpur | Jamnagar | Jasdan | Jetpur | Jhagadia | Jhalod | Jodia |
    Junagadh | Junagarh | Kalawad | Kalol | Kapad Wanj | Keshod | Khambat | Khambhalia | Khavda | Kheda | Khedbrahma |
    Kheralu | Kodinar | Kotdasanghani | Kunkawav | Kutch | Kutchmandvi | Kutiyana | Lakhpat | Lakhtar | Lalpur | Limbdi |
    Limkheda | Lunavada | M.M.Mangrol | Mahuva | Malia - Hatina | Maliya | Malpur | Manavadar | Mandvi | Mangrol |
    Mehmedabad |
    Mehsana | Miyagam | Modasa | Morvi | Muli | Mundra | Nadiad | Nakhatrana | Nalia | Narmada | Naswadi | Navasari |
    Nizar | Okha | Paddhari | Padra | Palanpur | Palitana | Panchmahals | Patan | Pavijetpur | Porbandar | Prantij |
    Radhanpur | Rahpar | Rajaula | Rajkot | Rajpipla | Ranavav | Sabarkantha | Sanand | Sankheda | Santalpur |
    Santrampur |
    Savarkundla | Savli | Sayan | Sayla | Shehra | Sidhpur | Sihor | Sojitra | Sumrasar | Surat | Surendranagar | Talaja |
    Thara | Tharad | Thasra | Una - Diu | Upleta | Vadgam | Vadodara | Valia | Vallabhipur | Valod | Valsad | Vanthali |
    Vapi |
    Vav | Veraval | Vijapur | Viramgam | Visavadar | Visnagar | Vyara | Waghodia | Wankaner`;
  s_a[13] =
    `Adampur Mandi | Ambala | Assandh | Bahadurgarh | Barara | Barwala | Bawal | Bawanikhera | Bhiwani | Charkhidadri |
  Cheeka | Chhachrauli | Dabwali | Ellenabad | Faridabad | Fatehabad | Ferojpur Jhirka | Gharaunda | Gohana | Gurgaon |
    Hansi | Hisar | Jagadhari | Jatusana | Jhajjar | Jind | Julana | Kaithal | Kalanaur | Kalanwali | Kalka | Karnal |
    Kosli |
    Kurukshetra | Loharu | Mahendragarh | Meham | Mewat | Mohindergarh | Naraingarh | Narnaul | Narwana | Nilokheri |
    Nuh |
    Palwal | Panchkula | Panipat | Pehowa | Ratia | Rewari | Rohtak | Safidon | Sirsa | Siwani | Sonipat | Tohana |
    Tohsam |
    Yamunanagar`;
  s_a[14] =
    `Amb | Arki | Banjar | Bharmour | Bilaspur | Chamba | Churah | Dalhousie | Dehra Gopipur | Hamirpur | Jogindernagar |
  Kalpa | Kangra | Kinnaur | Kullu | Lahaul | Mandi | Nahan | Nalagarh | Nirmand | Nurpur | Palampur | Pangi | Paonta |
    Pooh | Rajgarh | Rampur Bushahar | Rohru | Shimla | Sirmaur | Solan | Spiti | Sundernagar | Theog | Udaipur | Una ";
  s_a[15] =
    " Akhnoor | Anantnag | Badgam | Bandipur | Baramulla | Basholi | Bedarwah | Budgam | Doda | Gulmarg | Jammu | Kalakot |
  Kargil | Karnah | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Mahore | Nagrota | Nobra | Nowshera | Nyoma | Padam |
    Pahalgam | Patnitop | Poonch | Pulwama | Rajouri | Ramban | Ramnagar | Reasi | Samba | Srinagar | Udhampur | Vaishno
  Devi`;
  s_a[16] =
    `Bagodar | Baharagora | Balumath | Barhi | Barkagaon | Barwadih | Basia | Bermo | Bhandaria | Bhawanathpur | Bishrampur |
  Bokaro | Bolwa | Bundu | Chaibasa | Chainpur | Chakardharpur | Chandil | Chatra | Chavparan | Daltonganj | Deoghar |
    Dhanbad | Dumka | Dumri | Garhwa | Garu | Ghaghra | Ghatsila | Giridih | Godda | Gomia | Govindpur | Gumla |
    Hazaribagh |
    Hunterganj | Ichak | Itki | Jagarnathpur | Jamshedpur | Jamtara | Japla | Jharmundi | Jhinkpani | Jhumaritalaiya |
    Kathikund | Kharsawa | Khunti | Koderma | Kolebira | Latehar | Lohardaga | Madhupur | Mahagama | Maheshpur Raj |
    Mandar |
    Mandu | Manoharpur | Muri | Nagarutatri | Nala | Noamundi | Pakur | Palamu | Palkot | Patan | Rajdhanwar | Rajmahal |
    Ramgarh | Ranchi | Sahibganj | Saraikela | Simaria | Simdega | Singhbhum | Tisri | Torpa`;
  s_a[17] =
    `Afzalpur | Ainapur | Aland | Alur | Anekal | Ankola | Arsikere | Athani | Aurad | Bableshwar | Badami | Bagalkot |
  Bagepalli | Bailhongal | Bangalore | Bangalore Rural | Bangarpet | Bantwal | Basavakalyan | Basavanabagewadi |
    Basavapatna | Belgaum | Bellary | Belthangady | Belur | Bhadravati | Bhalki | Bhatkal | Bidar | Bijapur | Biligi |
    Chadchan | Challakere | Chamrajnagar | Channagiri | Channapatna | Channarayapatna | Chickmagalur | Chikballapur |
    Chikkaballapur | Chikkanayakanahalli | Chikkodi | Chikmagalur | Chincholi | Chintamani | Chitradurga | Chittapur |
    Cowdahalli | Davanagere | Deodurga | Devangere | Devarahippargi | Dharwad | Doddaballapur | Gadag | Gangavathi |
    Gokak |
    Gowribdanpur | Gubbi | Gulbarga | Gundlupet | H.B.Halli | H.D.Kote | Haliyal | Hampi | Hangal | Harapanahalli |
    Hassan |
    Haveri | Hebri | Hirekerur | Hiriyur | Holalkere | Holenarsipur | Honnali | Honnavar | Hosadurga | Hosakote |
    Hosanagara | Hospet | Hubli | Hukkeri | Humnabad | Hungund | Hunsagi | Hunsur | Huvinahadagali | Indi | Jagalur |
    Jamkhandi | Jewargi | Joida | K.R.Nagar | Kadur | Kalghatagi | Kamalapur | Kanakapura | Kannada | Kargal | Karkala |
    Karwar | Khanapur | Kodagu | Kolar | Kollegal | Koppa | Koppal | Koratageri | Krishnarajapet | Kudligi | Kumta |
    Kundapur | Kundgol | Kunigal | Kurugodu | Kustagi | Lingsugur | Madikeri | Madugiri | Malavalli | Malur | Mandya |
    Mangalore | Manipal | Manvi | Mashal | Molkalmuru | Mudalgi | Muddebihal | Mudhol | Mudigere | Mulbagal | Mundagod |
    Mundargi | Murugod | Mysore | Nagamangala | Nanjangud | Nargund | Narsimrajapur | Navalgund | Nelamangala | Nimburga |
    Pandavapura | Pavagada | Puttur | Raibag | Raichur | Ramdurg | Ranebennur | Ron | Sagar | Sakleshpur | Salkani |
    Sandur |
    Saundatti | Savanur | Sedam | Shahapur | Shankarnarayana | Shikaripura | Shimoga | Shirahatti | Shorapur | Siddapur |
    Sidlaghatta | Sindagi | Sindhanur | Sira | Sirsi | Siruguppa | Somwarpet | Sorab | Sringeri | Sriniwaspur |
    Srirangapatna | Sullia | T.Narsipur | Tallak | Tarikere | Telgi | Thirthahalli | Tiptur | Tumkur | Turuvekere |
    Udupi |
    Virajpet | Wadi | Yadgiri | Yelburga | Yellapur`;
  s_a[18] =
    ` Adimaly | Adoor | Agathy | Alappuzha | Alathur | Alleppey | Alwaye | Amini | Androth | Attingal | Badagara | Bitra |
  Calicut | Cannanore | Chetlet | Ernakulam | Idukki | Irinjalakuda | Kadamath | Kalpeni | Kalpetta | Kanhangad |
    Kanjirapally | Kannur | Karungapally | Kasargode | Kavarathy | Kiltan | Kochi | Koduvayur | Kollam | Kottayam |
    Kovalam |
    Kozhikode | Kunnamkulam | Malappuram | Mananthodi | Manjeri | Mannarghat | Mavelikkara | Minicoy | Munnar |
    Muvattupuzha | Nedumandad | Nedumgandam | Nilambur | Palai | Palakkad | Palghat | Pathaanamthitta | Pathanamthitta |
    Payyanur | Peermedu | Perinthalmanna | Perumbavoor | Punalur | Quilon | Ranni | Shertallai | Shoranur | Taliparamba |
    Tellicherry | Thiruvananthapuram | Thodupuzha | Thrissur | Tirur | Tiruvalla | Trichur | Trivandrum | Uppala |
    Vadakkanchery | Vikom | Wayanad `;
  s_a[19] =
    `Agatti Island | Bingaram Island | Bitra Island | Chetlat Island | Kadmat Island | Kalpeni Island | Kavaratti Island |
  Kiltan Island | Lakshadweep Sea | Minicoy Island | North Island | South Island `;
  s_a[20] =
    `Agar | Ajaigarh | Alirajpur | Amarpatan | Amarwada | Ambah | Anuppur | Arone | Ashoknagar | Ashta | Atner |
  Babaichichli | Badamalhera | Badarwsas | Badnagar | Badnawar | Badwani | Bagli | Baihar | Balaghat | Baldeogarh |
    Baldi |
    Bamori | Banda | Bandhavgarh | Bareli | Baroda | Barwaha | Barwani | Batkakhapa | Begamganj | Beohari | Berasia |
    Berchha | Betul | Bhainsdehi | Bhander | Bhanpura | Bhikangaon | Bhimpur | Bhind | Bhitarwar | Bhopal | Biaora |
    Bijadandi | Bijawar | Bijaypur | Bina | Birsa | Birsinghpur | Budhni | Burhanpur | Buxwaha | Chachaura | Chanderi |
    Chaurai | Chhapara | Chhatarpur | Chhindwara | Chicholi | Chitrangi | Churhat | Dabra | Damoh | Datia | Deori |
    Deosar |
    Depalpur | Dewas | Dhar | Dharampuri | Dindori | Gadarwara | Gairatganj | Ganjbasoda | Garoth | Ghansour | Ghatia |
    Ghatigaon | Ghorandogri | Ghughari | Gogaon | Gohad | Goharganj | Gopalganj | Gotegaon | Gourihar | Guna | Gunnore |
    Gwalior | Gyraspur | Hanumana | Harda | Harrai | Harsud | Hatta | Hoshangabad | Ichhawar | Indore | Isagarh | Itarsi |
    Jabalpur | Jabera | Jagdalpur | Jaisinghnagar | Jaithari | Jaitpur | Jaitwara | Jamai | Jaora | Jatara | Jawad |
    Jhabua |
    Jobat | Jora | Kakaiya | Kannod | Kannodi | Karanjia | Kareli | Karera | Karhal | Karpa | Kasrawad | Katangi | Katni |
    Keolari | Khachrod | Khajuraho | Khakner | Khalwa | Khandwa | Khaniadhana | Khargone | Khategaon | Khetia |
    Khilchipur |
    Khirkiya | Khurai | Kolaras | Kotma | Kukshi | Kundam | Kurwai | Kusmi | Laher | Lakhnadon | Lamta | Lanji | Lateri |
    Laundi | Maheshwar | Mahidpurcity | Maihar | Majhagwan | Majholi | Malhargarh | Manasa | Manawar | Mandla | Mandsaur |
    Manpur | Mauganj | Mawai | Mehgaon | Mhow | Morena | Multai | Mungaoli | Nagod | Nainpur | Narsingarh | Narsinghpur |
    Narwar | Nasrullaganj | Nateran | Neemuch | Niwari | Niwas | Nowgaon | Pachmarhi | Pandhana | Pandhurna | Panna |
    Parasia | Patan | Patera | Patharia | Pawai | Petlawad | Pichhore | Piparia | Pohari | Prabhapattan | Punasa |
    Pushprajgarh | Raghogarh | Raghunathpur | Rahatgarh | Raisen | Rajgarh | Rajpur | Ratlam | Rehli | Rewa | Sabalgarh |
    Sagar | Sailana | Sanwer | Sarangpur | Sardarpur | Satna | Saunsar | Sehore | Sendhwa | Seondha | Seoni | Seonimalwa |
    Shahdol | Shahnagar | Shahpur | Shajapur | Sheopur | Sheopurkalan | Shivpuri | Shujalpur | Sidhi | Sihora | Silwani |
    Singrauli | Sirmour | Sironj | Sitamau | Sohagpur | Sondhwa | Sonkatch | Susner | Tamia | Tarana | Tendukheda |
    Teonthar |
    Thandla | Tikamgarh | Timarani | Udaipura | Ujjain | Umaria | Umariapan | Vidisha | Vijayraghogarh | Waraseoni |
    Zhirnia `;
  s_a[21] =
    `Achalpur | Aheri | Ahmednagar | Ahmedpur | Ajara | Akkalkot | Akola | Akole | Akot | Alibagh | Amagaon | Amalner |
  Ambad | Ambejogai | Amravati | Arjuni Merogaon | Arvi | Ashti | Atpadi | Aurangabad | Ausa | Babhulgaon | Balapur |
    Baramati | Barshi Takli | Barsi | Basmatnagar | Bassein | Beed | Bhadrawati | Bhamregadh | Bhandara | Bhir |
    Bhiwandi |
    Bhiwapur | Bhokar | Bhokardan | Bhoom | Bhor | Bhudargad | Bhusawal | Billoli | Brahmapuri | Buldhana | Butibori |
    Chalisgaon | Chamorshi | Chandgad | Chandrapur | Chandur | Chanwad | Chhikaldara | Chikhali | Chinchwad | Chiplun |
    Chopda | Chumur | Dahanu | Dapoli | Darwaha | Daryapur | Daund | Degloor | Delhi Tanda | Deogad | Deolgaonraja |
    Deori |
    Desaiganj | Dhadgaon | Dhanora | Dharani | Dhiwadi | Dhule | Dhulia | Digras | Dindori | Edalabad | Erandul |
    Etapalli |
    Gadhchiroli | Gadhinglaj | Gaganbavada | Gangakhed | Gangapur | Gevrai | Ghatanji | Golegaon | Gondia | Gondpipri |
    Goregaon | Guhagar | Hadgaon | Hatkangale | Hinganghat | Hingoli | Hingua | Igatpuri | Indapur | Islampur | Jalgaon |
    Jalna | Jamkhed | Jamner | Jath | Jawahar | Jintdor | Junnar | Kagal | Kaij | Kalamb | Kalamnuri | Kallam |
    Kalmeshwar |
    Kalwan | Kalyan | Kamptee | Kandhar | Kankavali | Kannad | Karad | Karjat | Karmala | Katol | Kavathemankal |
    Kedgaon |
    Khadakwasala | Khamgaon | Khed | Khopoli | Khultabad | Kinwat | Kolhapur | Kopargaon | Koregaon | Kudal | Kuhi |
    Kurkheda | Kusumba | Lakhandur | Langa | Latur | Lonar | Lonavala | Madangad | Madha | Mahabaleshwar | Mahad |
    Mahagaon |
    Mahasala | Mahaswad | Malegaon | Malgaon | Malgund | Malkapur | Malsuras | Malwan | Mancher | Mangalwedha | Mangaon |
    Mangrulpur | Manjalegaon | Manmad | Maregaon | Mehda | Mekhar | Mohadi | Mohol | Mokhada | Morshi | Mouda | Mukhed |
    Mul |
    Mumbai | Murbad | Murtizapur | Murud | Nagbhir | Nagpur | Nahavara | Nanded | Nandgaon | Nandnva | Nandurbar |
    Narkhed |
    Nashik | Navapur | Ner | Newasa | Nilanga | Niphad | Omerga | Osmanabad | Pachora | Paithan | Palghar | Pali |
    Pandharkawada | Pandharpur | Panhala | Paranda | Parbhani | Parner | Parola | Parseoni | Partur | Patan | Pathardi |
    Pathari | Patoda | Pauni | Peint | Pen | Phaltan | Pimpalner | Pirangut | Poladpur | Pune | Pusad | Pusegaon |
    Radhanagar | Rahuri | Raigad | Rajapur | Rajgurunagar | Rajura | Ralegaon | Ramtek | Ratnagiri | Raver | Risod |
    Roha |
    Sakarwadi | Sakoli | Sakri | Salekasa | Samudrapur | Sangamner | Sanganeshwar | Sangli | Sangola | Sanguem | Saoner |
    Saswad | Satana | Satara | Sawantwadi | Seloo | Shahada | Shahapur | Shahuwadi | Shevgaon | Shirala | Shirol |
    Shirpur |
    Shirur | Shirwal | Sholapur | Shri Rampur | Shrigonda | Shrivardhan | Sillod | Sinderwahi | Sindhudurg | Sindkheda |
    Sindkhedaraja | Sinnar | Sironcha | Soyegaon | Surgena | Talasari | Talegaon S.Ji Pant | Taloda | Tasgaon | Thane |
    Tirora | Tiwasa | Trimbak | Tuljapur | Tumsar | Udgir | Umarkhed | Umrane | Umrer | Urlikanchan | Vaduj | Velhe |
    Vengurla | Vijapur | Vita | Wada | Wai | Walchandnagar | Wani | Wardha | Warlydwarud | Warora | Washim | Wathar |
    Yavatmal | Yawal | Yeola | Yeotmal`;
  s_a[22] =
    `Bishnupur | Chakpikarong | Chandel | Chattrik | Churachandpur | Imphal | Jiribam | Kakching | Kalapahar | Mao | Mulam |
  Parbung | Sadarhills | Saibom | Sempang | Senapati | Sochumer | Taloulong | Tamenglong | Thinghat | Thoubal |
    Ukhrul `;
  s_a[23] =
    `Amlaren | Baghmara | Cherrapunjee | Dadengiri | Garo Hills | Jaintia Hills | Jowai | Khasi Hills | Khliehriat |
  Mariang | Mawkyrwat | Nongpoh | Nongstoin | Resubelpara | Ri Bhoi | Shillong | Tura | Williamnagar`;
  s_a[24] = `Aizawl | Champhai | Demagiri | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip`;
  s_a[25] = `Dimapur | Jalukie | Kiphire | Kohima | Mokokchung | Mon | Phek | Tuensang | Wokha | Zunheboto`;
  s_a[26] =
    `Anandapur | Angul | Anugul | Aska | Athgarh | Athmallik | Attabira | Bagdihi | Balangir | Balasore | Baleswar |
  Baliguda | Balugaon | Banaigarh | Bangiriposi | Barbil | Bargarh | Baripada | Barkot | Basta | Berhampur | Betanati |
    Bhadrak | Bhanjanagar | Bhawanipatna | Bhubaneswar | Birmaharajpur | Bisam Cuttack | Boriguma | Boudh | Buguda |
    Chandbali | Chhatrapur | Chhendipada | Cuttack | Daringbadi | Daspalla | Deodgarh | Deogarh | Dhanmandal |
    Dharamgarh |
    Dhenkanal | Digapahandi | Dunguripali | G.Udayagiri | Gajapati | Ganjam | Ghatgaon | Gudari | Gunupur | Hemgiri |
    Hindol | Jagatsinghapur | Jajpur | Jamankira | Jashipur | Jayapatna | Jeypur | Jharigan | Jharsuguda | Jujumura |
    Kalahandi | Kalimela | Kamakhyanagar | Kandhamal | Kantabhanji | Kantamal | Karanjia | Kashipur | Kendrapara |
    Kendujhar |
    Keonjhar | Khalikote | Khordha | Khurda | Komana | Koraput | Kotagarh | Kuchinda | Lahunipara | Laxmipur | M.Rampur |
    Malkangiri | Mathili | Mayurbhanj | Mohana | Motu | Nabarangapur | Naktideul | Nandapur | Narlaroad | Narsinghpur |
    Nayagarh | Nimapara | Nowparatan | Nowrangapur | Nuapada | Padampur | Paikamal | Palla Hara | Papadhandi | Parajang |
    Pardip | Parlakhemundi | Patnagarh | Pattamundai | Phiringia | Phulbani | Puri | Puruna Katak | R.Udayigiri |
    Rairakhol |
    Rairangpur | Rajgangpur | Rajkhariar | Rayagada | Rourkela | Sambalpur | Sohela | Sonapur | Soro | Subarnapur |
    Sunabeda | Sundergarh | Surada | T.Rampur | Talcher | Telkoi | Titlagarh | Tumudibandha | Udala | Umerkote `;
  s_a[27] = `Bahur | Karaikal | Mahe | Pondicherry | Purnankuppam | Valudavur | Villianur | Yanam `;
  s_a[28] =
    ` Abohar | Ajnala | Amritsar | Balachaur | Barnala | Batala | Bathinda | Chandigarh | Dasua | Dinanagar | Faridkot |
  Fatehgarh Sahib | Fazilka | Ferozepur | Garhashanker | Goindwal | Gurdaspur | Guruharsahai | Hoshiarpur | Jagraon |
    Jalandhar | Jugial | Kapurthala | Kharar | Kotkapura | Ludhiana | Malaut | Malerkotla | Mansa | Moga | Muktasar |
    Nabha |
    Nakodar | Nangal | Nawanshahar | Nawanshahr | Pathankot | Patiala | Patti | Phagwara | Phillaur | Phulmandi |
    Quadian |
    Rajpura | Raman | Rayya | Ropar | Rupnagar | Samana | Samrala | Sangrur | Sardulgarh | Sarhind | SAS Nagar | Sultanpur
  Lodhi | Sunam | Tanda Urmar | Tarn Taran | Zira`;
  s_a[29] =
    `Abu Road | Ahore | Ajmer | Aklera | Alwar | Amber | Amet | Anupgarh | Asind | Aspur | Atru | Bagidora | Bali |
  Bamanwas | Banera | Bansur | Banswara | Baran | Bari | Barisadri | Barmer | Baseri | Bassi | Baswa | Bayana | Beawar |
    Begun | Behror | Bhadra | Bharatpur | Bhilwara | Bhim | Bhinmal | Bikaner | Bilara | Bundi | Chhabra | Chhipaborad |
    Chirawa | Chittorgarh | Chohtan | Churu | Dantaramgarh | Dausa | Deedwana | Deeg | Degana | Deogarh | Deoli | Desuri |
    Dhariawad | Dholpur | Digod | Dudu | Dungarpur | Dungla | Fatehpur | Gangapur | Gangdhar | Gerhi | Ghatol | Girwa |
    Gogunda | Hanumangarh | Hindaun | Hindoli | Hurda | Jahazpur | Jaipur | Jaisalmer | Jalore | Jhalawar | Jhunjhunu |
    Jodhpur | Kaman | Kapasan | Karauli | Kekri | Keshoraipatan | Khandar | Kherwara | Khetri | Kishanganj | Kishangarh |
    Kishangarhbas | Kolayat | Kota | Kotputli | Kotra | Kotri | Kumbalgarh | Kushalgarh | Ladnun | Ladpura | Lalsot |
    Laxmangarh | Lunkaransar | Mahuwa | Malpura | Malvi | Mandal | Mandalgarh | Mandawar | Mangrol | Marwar - Jn | Merta |
    Nadbai | Nagaur | Nainwa | Nasirabad | Nathdwara | Nawa | Neem Ka Thana | Newai | Nimbahera | Nohar | Nokha | Onli |
    Osian | Pachpadara | Pachpahar | Padampur | Pali | Parbatsar | Phagi | Phalodi | Pilani | Pindwara | Pipalda |
    Pirawa |
    Pokaran | Pratapgarh | Raipur | Raisinghnagar | Rajgarh | Rajsamand | Ramganj Mandi | Ramgarh | Rashmi | Ratangarh |
    Reodar | Rupbas | Sadulshahar | Sagwara | Sahabad | Salumber | Sanchore | Sangaria | Sangod | Sapotra | Sarada |
    Sardarshahar | Sarwar | Sawai Madhopur | Shahapura | Sheo | Sheoganj | Shergarh | Sikar | Sirohi | Siwana | Sojat |
    Sri
  Dungargarh | Sri Ganganagar | Sri Karanpur | Sri Madhopur | Sujangarh | Taranagar | Thanaghazi | Tibbi | Tijara |
    Todaraisingh | Tonk | Udaipur | Udaipurwati | Uniayara | Vallabhnagar | Viratnagar`;
  s_a[30] =
    ` Barmiak | Be | Bhurtuk | Chhubakha | Chidam | Chubha | Chumikteng | Dentam | Dikchu | Dzongri | Gangtok | Gauzing |
  Gyalshing | Hema | Kerung | Lachen | Lachung | Lema | Lingtam | Lungthu | Mangan | Namchi | Namthang | Nanga | Nantang |
    Naya Bazar | Padamachen | Pakhyong | Pemayangtse | Phensang | Rangli | Rinchingpong | Sakyong | Samdong | Singtam |
    Siniolchu | Sombari | Soreng | Sosing | Tekhug | Temi | Tsetang | Tsomgo | Tumlong | Yangang | Yumtang `;
  s_a[31] =
    `Ambasamudram | Anamali | Arakandanallur | Arantangi | Aravakurichi | Ariyalur | Arkonam | Arni | Aruppukottai | Attur |
  Avanashi | Batlagundu | Bhavani | Chengalpattu | Chengam | Chennai | Chidambaram | Chingleput | Coimbatore |
    Courtallam | Cuddalore | Cumbum | Denkanikoitah | Devakottai | Dharampuram | Dharmapuri | Dindigul | Erode | Gingee |
    Gobichettipalayam | Gudalur | Gudiyatham | Harur | Hosur | Jayamkondan | Kallkurichi | Kanchipuram | Kangayam |
    Kanyakumari | Karaikal | Karaikudi | Karur | Keeranur | Kodaikanal | Kodumudi | Kotagiri | Kovilpatti | Krishnagiri |
    Kulithalai | Kumbakonam | Kuzhithurai | Madurai | Madurantgam | Manamadurai | Manaparai | Mannargudi |
    Mayiladuthurai |
    Mayiladutjurai | Mettupalayam | Metturdam | Mudukulathur | Mulanur | Musiri | Nagapattinam | Nagarcoil | Namakkal |
    Nanguneri | Natham | Neyveli | Nilgiris | Oddanchatram | Omalpur | Ootacamund | Ooty | Orathanad | Palacode | Palani |
    Palladum | Papanasam | Paramakudi | Pattukottai | Perambalur | Perundurai | Pollachi | Polur | Pondicherry |
    Ponnamaravathi | Ponneri | Pudukkottai | Rajapalayam | Ramanathapuram | Rameshwaram | Ranipet | Rasipuram | Salem |
    Sankagiri | Sankaran | Sathiyamangalam | Sivaganga | Sivakasi | Sriperumpudur | Srivaikundam | Tenkasi | Thanjavur |
    Theni | Thirumanglam | Thiruraipoondi | Thoothukudi | Thuraiyure | Tindivanam | Tiruchendur | Tiruchengode |
    Tiruchirappalli | Tirunelvelli | Tirupathur | Tirupur | Tiruttani | Tiruvallur | Tiruvannamalai | Tiruvarur |
    Tiruvellore | Tiruvettipuram | Trichy | Tuticorin | Udumalpet | Ulundurpet | Usiliampatti | Uthangarai | Valapady |
    Valliyoor | Vaniyambadi | Vedasandur | Vellore | Velur | Vilathikulam | Villupuram | Virudhachalam | Virudhunagar |
    Wandiwash | Yercaud `;
  s_a[32] =
    `Agartala | Ambasa | Bampurbari | Belonia | Dhalai | Dharam Nagar | Kailashahar | Kamal Krishnabari | Khopaiyapara |
  Khowai | Phuldungsei | Radha Kishore Pur | Tripura `;
  s_a[33] =
    `Achhnera | Agra | Akbarpur | Aliganj | Aligarh | Allahabad | Ambedkar Nagar | Amethi | Amiliya | Amroha | Anola |
  Atrauli | Auraiya | Azamgarh | Baberu | Badaun | Baghpat | Bagpat | Baheri | Bahraich | Ballia | Balrampur | Banda |
    Bansdeeh | Bansgaon | Bansi | Barabanki | Bareilly | Basti | Bhadohi | Bharthana | Bharwari | Bhogaon | Bhognipur |
    Bidhuna | Bijnore | Bikapur | Bilari | Bilgram | Bilhaur | Bindki | Bisalpur | Bisauli | Biswan | Budaun | Budhana |
    Bulandshahar | Bulandshahr | Capianganj | Chakia | Chandauli | Charkhari | Chhata | Chhibramau | Chirgaon |
    Chitrakoot |
    Chunur | Dadri | Dalmau | Dataganj | Debai | Deoband | Deoria | Derapur | Dhampur | Domariyaganj | Dudhi | Etah |
    Etawah |
    Faizabad | Farrukhabad | Fatehpur | Firozabad | Garauth | Garhmukteshwar | Gautam Buddha Nagar | Ghatampur |
    Ghaziabad |
    Ghazipur | Ghosi | Gonda | Gorakhpur | Gunnaur | Haidergarh | Hamirpur | Hapur | Hardoi | Harraiya | Hasanganj |
    Hasanpur | Hathras | Jalalabad | Jalaun | Jalesar | Jansath | Jarar | Jasrana | Jaunpur | Jhansi |
    Jyotiba Phule Nagar |
    Kadipur | Kaimganj | Kairana | Kaisarganj | Kalpi | Kannauj | Kanpur | Karchhana | Karhal | Karvi | Kasganj |
    Kaushambi |
    Kerakat | Khaga | Khair | Khalilabad | Kheri | Konch | Kumaon | Kunda | Kushinagar | Lalganj | Lalitpur | Lucknow |
    Machlishahar | Maharajganj | Mahoba | Mainpuri | Malihabad | Mariyahu | Math | Mathura | Mau | Maudaha |
    Maunathbhanjan |
    Mauranipur | Mawana | Meerut | Mehraun | Meja | Mirzapur | Misrikh | Modinagar | Mohamdabad | Mohamdi | Moradabad |
    Musafirkhana | Muzaffarnagar | Nagina | Najibabad | Nakur | Nanpara | Naraini | Naugarh | Nawabganj | Nighasan |
    Noida |
    Orai | Padrauna | Pahasu | Patti | Pharenda | Phoolpur | Phulpur | Pilibhit | Pitamberpur | Powayan | Pratapgarh |
    Puranpur | Purwa | Raibareli | Rampur | Ramsanehi Ghat | Rasara | Rath | Robertsganj | Sadabad | Safipur | Sagri |
    Saharanpur | Sahaswan | Sahjahanpur | Saidpur | Salempur | Salon | Sambhal | Sandila | Sant Kabir Nagar | Sant Ravidas
  Nagar | Sardhana | Shahabad | Shahganj | Shahjahanpur | Shikohabad | Shravasti | Siddharthnagar | Sidhauli | Sikandra
  Rao | Sikandrabad | Sitapur | Siyana | Sonbhadra | Soraon | Sultanpur | Tanda | Tarabganj | Tilhar | Unnao | Utraula |
    Varanasi | Zamania `;
  s_a[34] =
    `Almora | Bageshwar | Bhatwari | Chakrata | Chamoli | Champawat | Dehradun | Deoprayag | Dharchula | Dunda | Haldwani |
  Haridwar | Joshimath | Karan Prayag | Kashipur | Khatima | Kichha | Lansdown | Munsiari | Mussoorie | Nainital |
    Pantnagar | Partapnagar | Pauri Garhwal | Pithoragarh | Purola | Rajgarh | Ranikhet | Roorkee | Rudraprayag | Tehri
  Garhwal | Udham Singh Nagar | Ukhimath | Uttarkashi`;
  s_a[35] =
    `Adra | Alipurduar | Amlagora | Arambagh | Asansol | Balurghat | Bankura | Bardhaman | Basirhat | Berhampur |
  Bethuadahari | Birbhum | Birpara | Bishanpur | Bolpur | Bongoan | Bulbulchandi | Burdwan | Calcutta | Canning |
    Champadanga | Contai | Cooch Behar | Daimond Harbour | Dalkhola | Dantan | Darjeeling | Dhaniakhali | Dhuliyan |
    Dinajpur | Dinhata | Durgapur | Gangajalghati | Gangarampur | Ghatal | Guskara | Habra | Haldia | Harirampur |
    Harishchandrapur | Hooghly | Howrah | Islampur | Jagatballavpur | Jalpaiguri | Jhalda | Jhargram | Kakdwip |
    Kalchini |
    Kalimpong | Kalna | Kandi | Karimpur | Katwa | Kharagpur | Khatra | Krishnanagar | Mal Bazar | Malda | Manbazar |
    Mathabhanga | Medinipur | Mekhliganj | Mirzapur | Murshidabad | Nadia | Nagarakata | Nalhati | Nayagarh | Parganas |
    Purulia | Raiganj | Rampur Hat | Ranaghat | Seharabazar | Siliguri | Suri | Takipur | Tamluk `;

  function print_state(state_id) {
    var option_str = document.getElementById(state_id);
    option_str.length = 0;
    option_str.options[0] = new Option('Select State', '');
    option_str.selectedIndex = 0;
    for (var i = 0; i < state_arr.length; i++) {
      option_str.options[option_str.length] = new Option(state_arr[i], state_arr[i]);
    }
  }

  function print_city(city_id, city_index) {
    var option_str = document.getElementById(city_id);
    option_str.length =
      0;
  }
</script>


<?php
if ($this->session->flashdata('res') == 'success') {
  echo '<script>$.notify("' . $this->session->flashdata('msg') . '","success")</script>';
} else if ($this->session->flashdata('res') == 'error') {
  echo '<script>$.notify("' . $this->session->flashdata('msg') . '","error")</script>';
}
?>

<?php
unset($_SESSION['res']);
unset($_SESSION['msg']);
?>

<script>
  $('.search-handle').click(function() {
    $(this).toggle();
    $('.logo').toggle();
    $('.search-box').toggle();
  })
  $('.search-btn').click(function() {
    $('.search-box').toggle();
    $('.logo').toggle();
    $('.search-handle').toggle();
  })
</script>

<script>
  $('#feedbackBtn').click(function() {
    $('#myfeed').toggle();
  })
  $('.closeFeedback').click(function() {
    $('#myfeed').hide();
  })
  $('.quick-view-img').owlCarousel({
    loop: false,
    autoplay: false,
    nav: true,
    dots: false,
    items: 1,
    navText: [
      '<i class="fa-solid fa-angle-left" style="color:#8340A1; font-size: 22px;"></i>',
      '<i class="fa-solid fa-angle-right" style="color: #8340A1; font-size: 22px;"></i>'
    ],

  })
  jQuery(function() {

    jQuery('.product-left a').on('click', function(event) {
      var jQuerypic = jQuery(this).find('img').attr('src');
      jQuery('.quick-view-img').attr('src', jQuery(this).attr('src'));
    });
  });
</script>
<script>
  $('.popup-colors').owlCarousel({
    loop: false,
    autoplay: false,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 4.8,

      },
      460: {
        items: 4.5,
      },
      768: {
        items: 6.5,
      },
      1000: {
        items: 7.5,
      }
    },
  })

  $('.popup-combo').owlCarousel({
    loop: false,
    autoplay: false,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 5,

      },
      460: {
        items: 5,
      },
      768: {
        items: 5,
      },
      1000: {
        items: 7,
      }
    },
  })


  $('.popup-size').owlCarousel({
    loop: false,
    autoplay: false,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 5.2,

      },
      460: {
        items: 5.5,
      },
      768: {
        items: 7.5,
      },
      1000: {
        items: 8.2,
      }
    },

  })


  $('.user-review-img').owlCarousel({
    loop: true,
    autoplay: true,
    nav: false,
    items: 3,
    margin: 5,
    dots: false,

  })
  // show more filter content
  $('.MoreFilterContent').hide();
  $('.MoreFilterBtn').click(function() {

    // $('.MoreFilterContent').toggle();
    var ContentBox = $(this).parent().parent().parent().find('.MoreFilterContent');
    ContentBox.toggle();
    if (ContentBox.css('display') == 'block') {
      $(this).text('Less More');
    }
    if (ContentBox.css('display') == 'none') {
      var productNumber = this.title
      $(this).text('+' + productNumber + ' more');
    }
  })

  // show more filter content
  $('.MoreColor').hide();
  $('.MoreColorBtn').click(function() {

    // $('.MoreFilterContent').toggle();
    var ContentBox = $(this).parent().find('.MoreColor');
    ContentBox.toggle();

    if (ContentBox.css('display') == 'inline-block') {
      $(this).html("<i class='fa-solid fa-xmark m-0 x-0'></i>");
    }
    if (ContentBox.css('display') == 'none') {
      var productNumber = this.title
      $(this).text('+' + productNumber);
    }

    // fiexd close button for top-right position
    var btnStatus = $(this).children().hasClass('fa-xmark');
    if (btnStatus) {
      $(this).css({
        top: 95,
        right: 0,
        position: 'absolute'
      });
    } else {
      $(this).css({
        position: 'unset'
      });
    }

  })

  $('.sizeContainer').click(function() {
    status = $(this).hasClass('disabled');

    if (status == 'true') {
      jQuery("#NotifyProduct").modal('show');
      // alert("hii");
    }
  })
  $('.size-buttons-size-button-disabled').click(function() {
    status = $(this).hasClass('disabled');
    if (status == 'true') {
      jQuery("#NotifyProduct").modal('show');
      // alert("hii");
    }
  })

  $("body .lazy").Lazy({
    // callback
    beforeLoad: function(element) {
      console.log("start loading " + element.prop("tagName"));
    },

    // custom loaders
    customLoaderName: function(element) {
      element.html("element handled by custom loader");
      element.load();
    },
    asyncLoader: function(element, response) {
      setTimeout(function() {
        element.html("element handled by async loader");
        response(true);
      }, 1000);
    }
  });
</script>
<script>
  $('.product-nav-color').find('label').click(function() {
    $(this).parent().find('label').removeClass('active');
    $(this).addClass('active');
  })
  $('.product-nav-size label').click(function() {
    $(this).parent().find('label').removeClass('active');
    $(this).addClass('active');
  })
</script>

<!--code for sort-by filter-->
<script>
  $('.css-16z3cmu').click(function() {
    $('.css-16z3cmu').removeClass("activeSort");
    $(this).addClass("activeSort");

    $('.css-1fifvl0').removeClass("css-10ltdh");
    $('.css-1fifvl0').find('svg').remove();

    $('effect').removeClass("checked");
    $(this).children().children().find('.effect').addClass("checked");

    $(this).children().children().addClass("css-10ltdh");
    $(this).children().children().append(
      '<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.99234 9C3.55863 9 3.55863 9 2.22951 7.67838L0.312789 5.78638C0.213795 5.69046 0.135118 5.57581 0.0813976 5.44918C0.0276768 5.32254 0 5.18649 0 5.04906C0 4.91162 0.0276768 4.77557 0.0813976 4.64894C0.135118 4.5223 0.213795 4.40765 0.312789 4.31173C0.509534 4.11634 0.77623 4.00659 1.0543 4.00659C1.33236 4.00659 1.59906 4.11634 1.7958 4.31173L3.99234 6.49588L10.2042 0.305141C10.4009 0.10975 10.6676 0 10.9457 0C11.2238 0 11.4905 0.10975 11.6872 0.305141C11.7862 0.401057 11.8649 0.515712 11.9186 0.642346C11.9723 0.768979 12 0.905026 12 1.04246C12 1.1799 11.9723 1.31595 11.9186 1.44259C11.8649 1.56922 11.7862 1.68387 11.6872 1.77979L4.69187 8.73568C4.49929 8.90628 4.25026 9.00037 3.99234 9Z" fill="white"></path></svg>'
    );

    $('.radio').attr('checked', false);
    $(this).children().find('.radio').attr('checked', true);
  })

  $('.css-1uu6dpv').click(function() {
    $('.sortby').hide();

  })
  $('.sort-by-btn').click(function() {
    $('.sortby').show();

  })
</script>

<!--code for other filter-->
<script>
  $(".filter-btn").click(function() {
    $("aside").height(window.innerHeight);
    $("aside").show();
  });

  $(".close-filter").click(function() {
    $(this).parent().hide();

  })

  $(document).ready(function() {
    // product delivery pinocde box design
    pincodeBtnStatus();
    $(".input").on("input", function() {
      $('.helperText').hide();
      pincodeBtnStatus();
    })

    function pincodeBtnStatus() {

      PinCode = $(".input").val();
      tempPincode = $(".input").attr('value');

      if (PinCode == tempPincode) {
        $('.css-1gdrk6j').text('Edit');
        $('.css-1gdrk6j').attr('disabled', false);
      } else if (PinCode.length < 6) {
        $('.css-1gdrk6j').text('Apply');
        $('.css-1gdrk6j').attr('disabled', true);
      } else if (PinCode.length >= 6) {
        $('.css-1gdrk6j').text('Apply');
        $('.css-1gdrk6j').attr('disabled', false);
      }

    }

    $(".input").focus(function() {
      pincodeBtnStatus();
      $(".input").removeClass('css-hwf464');
      $(this).addClass('css-7dp5eh');
      $(this).parent().parent().parent().addClass('css-nwnz5');
      $(this).parent().parent().parent().removeClass('css-193eiy1');
      $('.bar').addClass('css-xpr9cz');
      $('.bar').addClass('inFocus');
      $('.bar').removeClass('css-11f900s');
      $('.bar').removeClass('isValid');

    });
    $(".input").focusout(function() {
      pincodeBtnStatus();
      $(".input").removeClass('css-hwf464');
      $(this).addClass('css-7dp5eh');
      $(this).parent().parent().parent().addClass('css-193eiy1');
      $(this).parent().parent().parent().removeClass('css-nwnz5');
      $('.bar').addClass('css-11f900s');
      $('.bar').addClass('isValid');
      $('.bar').removeClass('css-xpr9cz');
      $('.bar').removeClass('inFocus');
    });
  })

  // manage sort by container for desktop
  $('.desktop-filter-box').click(function() {
    $('.css-12jt4j8').text($(this).text());
    $('#sub-nav').hide();

  })
  $('.css-12jt4j8').click(function(e) {
    $('#sub-nav').show();
    e.stopPropagation();
  })
  $(document).click(function() {
    $('#sub-nav').hide();
  })

  // product slider 
  $('.matchitem-carousel').owlCarousel({
    loop: false,
    autoplay: false,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,

      },
      460: {
        items: 2,
      },
      1024: {
        items: 4,
      },
    },
    navText: [
      '<i class="fa-solid fa-angle-left " style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: 0px; left:15px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 3px 0 0 3px;"></i>',
      '<i class="fa-solid fa-angle-right" style="width: 30px; height:60px; display:flex; justify-content:center;align-items:center; position: absolute;top: 0px; left:-35px; font-size:16px; background: white; background: #ffffff !important; color: #6a6868; box-shadow: -3px 3px 11px #b3afaf;  border-radius: 0 3px 3px 0px;"></i>'
    ]

  })
</script>
<script>
  var count = 2;

  function loadMore(id, type) {
    var path = "<?php echo base_url($this->data->controller . '/showReview/') ?>" + id + "/" + type;
    var btnAction = $('.fa-spin');
    $.ajax({
      type: 'POST',
      url: path,
      data: {
        count: count
      },
      cache: false,
      beforeSend: function() {
        $(btnAction).show();
      },
      success: function(response) {
        count++;
        $(btnAction).hide();
        var response = JSON.parse(response);
        if (response[0].res == 'LoadMore') {
          $('.ajax-review').html(response[0].reviews);
          if (response[0].msg == 'No More Reviews') {
            $('.loadMoreBtn').hide();
          }
        } else if (response[0].res == 'RatingsFilter') {
          $('.ajax-review').html(response[0].reviews);
          $('.loadMoreBtn').hide();
        } else if (response[0].res == 'sortby') {
          $('.ajax-review').html(response[0].reviews);
          $('.loadMoreBtn').hide();
        }
      },
    });
  }

  function RatingsFilter(id, type, ratings, sortby) {
    var path = "<?php echo base_url($this->data->controller . '/showReview/') ?>" + id + "/" + type;
    var btnAction = $('.fa-spin');
    $.ajax({
      type: 'POST',
      url: path,
      data: {
        ratings: ratings,
        sortby: sortby
      },
      cache: false,
      beforeSend: function() {
        $(btnAction).show();
      },
      success: function(response) {
        $(btnAction).hide();
        var response = JSON.parse(response);
        if (response[0].res == 'LoadMore') {
          $('.ajax-review').html(response[0].reviews);

        } else if (response[0].res == 'RatingsFilter') {
          $('.ajax-review').html(response[0].reviews);
          $('.loadMoreBtn').hide();
        } else if (response[0].res == 'sortby') {
          $('.ajax-review').html(response[0].reviews);
          $('.loadMoreBtn').hide();
        }
      },
    });
  }

  function UpdateHelpfulReview(id, e) {
    $(e).attr('disabled', true);
    $.ajax({
      url: "<?php echo base_url("Home/UpdateHelpfulReview"); ?>",
      type: "post",
      data: {
        'id': id,
        'count': 1,
      },
      success: function(response) {
        var response = JSON.parse(response);
        if (response[0].res == 'success') {
          $(e).children().eq(1).find('.product-review-helpful-count').html(response[0].count);
        } else if (response[0].res == 'error') {
          $(e).children().eq(1).find('.product-review-helpful-count').html(response[0].count);
        }
      }
    });
  }

  $('.ratingarea').click(function() {
    $('.ratingarea').removeClass('active');
    $(this).addClass('active');
  })
</script>
<script>
  let shareData = {
    title: 'Slick Pattern',
    text: "Slick Pattern's Products",
    url: window.location.href,
  }

  const btn = document.querySelector('.shareBtn');

  btn.addEventListener('click', () => {
    navigator.share(shareData)
      .then(() =>
        console.log('shared successfully')
      )
      .catch((e) =>
        console.log('Error: ' + e)
      )
  });
</script>
<script>
  function toggleStickyHeader() {
    var header = document.getElementById("stickyHeader");
    header.classList.toggle("d-none");
  }

  var placeholderTexts = ["Search items...", "Type to search", "Try searching for something"];

  // Function to update placeholder text
  function updatePlaceholder() {
    var input = document.getElementById("search");
    var randomIndex = Math.floor(Math.random() * placeholderTexts.length);
    input.placeholder = placeholderTexts[randomIndex];
  }

  // Initial call to update placeholder text
  updatePlaceholder();

  // Update placeholder text every 2 seconds
  setInterval(updatePlaceholder, 2000);



  function backarrow() {
    $('#regotp').hide();
    $('#reg').show();
    $('#registerModalLabel').show();
    $('#reghed').hide();
  }


  // for registerUser 
  function registerUser() {
    var mobile = $('#mobile').val();
    var ref_by = $('#ref_by').val();

    $.ajax({
      type: 'POST',
      url: "<?= base_url('Home/register_user') ?>",
      data: {
        mobile: mobile,
        ref_by: ref_by
      },
      dataType: 'json',
      success: function(response) {
        if (response.success) {
          if (response.msg) {
            toastr.success(response.msg);
          }

          // Check if the user is old
          // if (response.is_old_user) {
          // $('#refCodeDiv').hide();
          // }
          $('#reg').hide();
          $('#regotp').show();

          $('#registerModalLabel').hide();
          $('#reghed').show();

        } else {
          toastr.error(response.msg);
        }
      }
    });
  }






  // for verifyOtp 
  function verifyOTP() {
    var otp = $('#otp').val();
    var mobile = $('#mobile').val();

    $.ajax({
      type: 'POST',
      url: "<?= base_url('Home/verify_otp') ?>",
      data: {
        otp: otp,
        mobile: mobile
      },
      dataType: 'json',
      success: function(response) {
        if (response.success) {
          toastr.success(response.msg);


          setTimeout(function() {
            window.location.href = "<?= base_url('Home/Profile') ?>";
          }, 1000);
        } else {
          toastr.error(response.msg);
        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }

  // JavaScript
  document.getElementById("dropdownMenuButton").addEventListener("click", function(event) {
    event.preventDefault(); // Prevents the default action of the button
  });
</script>