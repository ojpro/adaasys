<template>
  <div class="fixed-bottom-padding">
    <div class="p-3 border-bottom shadow">
      <div class="d-flex align-items-center">
        <a class="font-weight-bold text-danger text-decoration-none"
          ><i class="icofont-rounded-left back-page"></i
        ></a>
        <h6 class="font-weight-bold m-0 ml-3">My Order</h6>
      </div>
    </div>
    <main>
      <div class="container">
        <form>
          <div
            class="input-group mt-3 rounded shadow-sm overflow-hidden bg-white"
          >
            <div class="input-group-prepend">
              <button
                class="border-0 btn btn-outline-secondary text-dark bg-white"
              >
                <i class="icofont-search"></i>
              </button>
            </div>
            <input
              type="text"
              class="shadow-none border-0 form-control pl-0"
              name="phone"
              required=""
              placeholder="Phone Number/Order Id * *"
              value=""
            />
          </div>
          <div class="text-center" style="margin-top: 20px">
            <button
              type="submit"
              class="btn red-bg text-white btn-block btn-lg"
            >
              Search Order
            </button>
          </div>
        </form>
        <div
          class="
            osahan-menu-fotter
            fixed-bottom
            bg-white
            text-center
            border-top
            new-menu-fotter
            shadow
          "
        >
          <div class="row m-0">
            <a
              class="
                text-dark
                small
                col
                font-weight-bold
                text-decoration-none
                p-2
              "
              href="/store/a9055580c7831d05f32f1aa8b6cee04c47d99dbc"
              ><p class="h5 m-0"><i class="icofont-spoon-and-fork"></i></p>
              Menu</a
            ><a
              class="
                text-dark
                small
                col
                font-weight-bold
                text-decoration-none
                p-2
              "
              href="/store/cart/a9055580c7831d05f32f1aa8b6cee04c47d99dbc"
              ><p class="h5 m-0">
                <i class="icofont-cart"></i
                ><span class="badge badge-warning" id="lblCartCount"> 2</span>
              </p>
              Cart</a
            ><a
              aria-current="page"
              class="
                text-dark
                small
                col
                font-weight-bold
                text-decoration-none
                p-2
                selected
                active
              "
              href="/account/orders"
              ><p class="h5 m-0"><i class="icofont-paper"></i></p>
              My Order</a
            >
          </div>
        </div>
      </div>
    </main>
  </div>
</template>