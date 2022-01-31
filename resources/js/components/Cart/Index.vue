<template>
  <div class="fixed-bottom-padding bg-light-v2">
    <div class="p-3 border-bottom shadow">
      <div class="d-flex align-items-center">
        <router-link to="/" class="font-weight-bold text-danger text-decoration-none"
          ><i class="icofont-rounded-left back-page"></i
        ></router-link>
        <h6 class="font-weight-bold m-0 ml-3">سلة</h6>
      </div>
    </div>
    <div class="osahan-body">
      <div class="px-15">
        <div class="border-radius-4px bg-white margin-top-15px">
          <div>
            <div
              class="
                cart-item-meta
                pt-15
                pb-15
                align-items-center
                border-bottom
              "
            >
              <div class="cart-item-name">
                <i class="icofont-ui-delete text-danger"></i
                ><span class="false cart-itemname-left-9px"
                  ><strong>بيتزا بيروني</strong></span
                ><br />
              </div>
              <div
                class="
                  btn-group btn-group-sm
                  cart-item-btn cart-button-left-5px
                "
              >
                <div
                  class="input-group input-spinner ml-auto cart-items-number"
                >
                  <div class="input-group-prepend">
                    <button class="btn btn-success btn-sm" type="button">
                      -
                    </button>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder=""
                    value="1"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-success btn-sm" type="button">
                      +
                    </button>
                  </div>
                </div>
              </div>
              <div class="cart-item-price">
                <price>usd 100.00</price>
                <div class="cart-item-price">عائلية</div>
              </div>
            </div>
          </div>
          <div>
            <div
              class="
                cart-item-meta
                pt-15
                pb-15
                align-items-center
                border-bottom
              "
            >
              <div class="cart-item-name">
                <i class="icofont-ui-delete text-danger"></i
                ><span class="false cart-itemname-left-9px"
                  ><strong>بيتزا بيروني</strong></span
                ><br />
              </div>
              <div
                class="
                  btn-group btn-group-sm
                  cart-item-btn cart-button-left-5px
                "
              >
                <div
                  class="input-group input-spinner ml-auto cart-items-number"
                >
                  <div class="input-group-prepend">
                    <button class="btn btn-success btn-sm" type="button">
                      -
                    </button>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder=""
                    value="1"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-success btn-sm" type="button">
                      +
                    </button>
                  </div>
                </div>
              </div>
              <div class="cart-item-price">
                <price>usd 100.00</price>
                <div class="cart-item-price">عائلية</div>
              </div>
            </div>
            <div class="tab-content filter bg-white" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="mon"
                role="tabpanel"
                aria-labelledby="mon-tab"
              >
                <div class="custom-control border-bottom px-0 custom-radio">
                  <label class="py-3 w-100 px-3" for="mon4"
                    ><i class="icofont-clock-time mr-2"></i> مايونيز x 1
                    <div class="cart-item-price">
                      <price>usd 1.50</price>
                    </div></label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />
      </div>
      <div class="px-15">
        <div class="p-3 bg-white border-radius-4px">
          <div class="form-group">
            <label for="exampleInputOLDPassword1"> الاسم *</label
            ><input
              name="name"
              type="text"
              required=""
              placeholder="الاسم"
              class="form-control"
              value=""
            />
          </div>
          <div class="form-group">
            <label for="exampleInputNEWPassword1">رقم الهاتف *</label
            ><input
              type="number"
              placeholder="رقم الهاتف"
              class="form-control"
              name="phone"
              required=""
              value=""
            />
          </div>
          <div class="form-group">
            <label for="exampleInputNEWPassword1">نوع الطلب *</label
            ><select
              type="text"
              class="form-control"
              name="order_type"
              placeholder="Enter Your Table No"
            >
              <option value="">نوع الطلب</option>
              <option value="1">تناول الطعام</option>
              <option value="2">سفري</option>
              <option value="3">توصيل</option>
              <option value="4">غرفة</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputNEWPassword1">التعليق </label
            ><input
              type="text"
              placeholder="التعليق"
              class="form-control"
              name="comments"
              value=""
            />
          </div>
        </div>
        <br />
        <div class="p-3 bg-white border-radius-4px">
          <div class="row">
            <div class="col-8 m-0 pr-1">
              <input
                placeholder="Enter Promo Code"
                type="text"
                class="form-control"
                id="exampleInputPromo1"
                key="enter_promo_code"
                translation="[object Object]"
              />
            </div>
            <div class="col-4 pl-1">
              <button type="submit" class="btn btn-success btn-block">
                Apply
              </button>
            </div>
          </div>
          <br />
        </div>
        <br />
        <div class="">
          <div class="bg-white bill-details border-radius-4px mb-200">
            <div class="p-15">
              <div class="display-flex">
                <div class="flex-auto">المجموع</div>
                <div class="flex-auto text-right">
                  <price>usd 201.50</price>
                </div>
              </div>
              <hr />
              <div class="display-flex text-success">
                <div class="flex-auto">Apply Coupon</div>
                <div class="flex-auto text-right">
                  - <price>usd 0.00</price>
                </div>
              </div>
              <hr />
              <div class="display-flex">
                <div class="flex-auto">تكلفة الخدمة</div>
                <div class="flex-auto text-right"><price>usd 0.00</price></div>
              </div>
              <hr />
              <div class="display-flex">
                <div class="flex-auto">الضريبة(%)</div>
                <div class="flex-auto text-right"><price>usd 0.00</price></div>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
    <button
      class="fixed-bottom align-items-center btn btn-lg btn-block text-white"
      style="background-color: rgb(96, 178, 70)"
    >
      <div class="more">
        <h6 class="m-0">التكلفة الاجمالية: <price>usd 201.50</price></h6>
        <p class="m-0">قم بتأكيد طلبك.</p>
      </div>
      <div class="ml-auto"><i class="icofont-simple-right"></i></div>
    </button>
  </div>
</template>