<?= $header; ?>


    <!-- Column Search -->
    <div class="card">
        <h5 class="card-header pb-0 text-md-start text-center">Usuarios del Sistema</h5>


        <hr class="m-0" />

            <div class="row gy-3"style="padding-left: 20px;">
                <div class="col-lg-4">
                    <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-icon btn-primary">
                            <span class="tf-icons bx bx-book-add bx-22px"></span>
                        </button>
                        <button type="button" class="btn rounded-pill btn-outline-secondary">
                            <span class="tf-icons bx bx-history bx-18px me-2"></span>Historial
                        </button>
                    </div>
                </div>

            </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-column-search table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Post</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Salary</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <!--/ Column Search -->

    <!-- Sticky Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div
                        class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">Elije un metodo de captura</h5>
                    <div class="action-btns">
                        <button class="btn btn-label-primary me-3">
                            <span class="align-middle"> Manual</span>
                        </button>
                        <button class="btn btn-primary">OCR</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <!-- 1. Delivery Address -->
                            <h5 class="mb-4">1. Datos Generales Personales</h5>
                            <div class="row g-6">
                                <div class="col-md-3">
                                    <label class="form-label" for="nombre1">Primer Nombre *</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="MARIA" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="nombre2">Segundo Nombre</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="ELENA" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="apellido1">Apellido Paterno *</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="MENDOZA" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="apellido2">Apellido Materno</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="CHAVEZ" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="apellido2">CURP *</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="MECE770501HMCLRN06" />
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="apellido2">INE *</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="00123456789" />
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="apellido2">RFC *</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="00123456789" />
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label" for="apellido2">NSS *</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="00123456789" />
                                </div>

                                <div class="col-md">
                                    <label class="form-label" for="state">Estado Civil</label>
                                    <select id="state" class="select2 form-select" data-allow-clear="true">
                                        <option value="" disabled selected>Selecciona una opción</option>
                                        <option value="AL">SOLTERO</option>
                                        <option value="AK">UNION LIBRE</option>
                                        <option value="AZ">CASADO</option>
                                        <option value="AR">VIUDO</option>
                                        <option value="AR">SEPARADO</option>
                                        <option value="AR">DIVORCIADO</option>
                                    </select>
                                </div>

                                <label class="form-check-label">Género</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home" >Hombre</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                                        <label class="form-check-label" for="collapsible-address-type-office"> Mujer </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                                        <label class="form-check-label" for="collapsible-address-type-office"> Sin especificar </label>
                                    </div>
                                </div>






                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                                class="form-control"
                                                type="text"
                                                id="email"
                                                name="email"
                                                placeholder="john.doe"
                                                aria-label="john.doe"
                                                aria-describedby="email3" />
                                        <span class="input-group-text" id="email3">@financieracultiva.com</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Contact Number</label>
                                    <input
                                            type="text"
                                            id="phone"
                                            class="form-control phone-mask"
                                            placeholder="658 799 8941"
                                            aria-label="658 799 8941" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="alt-num">Alternate Number</label>
                                    <input
                                            type="text"
                                            id="alt-num"
                                            class="form-control phone-mask"
                                            placeholder="658 799 8941" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea
                                            name="address"
                                            class="form-control"
                                            id="address"
                                            rows="2"
                                            placeholder="1456, Mall Road"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="pincode">Pincode</label>
                                    <input type="text" id="pincode" class="form-control" placeholder="658468" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="landmark">Landmark</label>
                                    <input type="text" id="landmark" class="form-control" placeholder="Nr. Wall Street" />
                                </div>
                                <div class="col-md">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" id="city" class="form-control" placeholder="Jackson" />
                                </div>
                                <div class="col-md">
                                    <label class="form-label" for="state">State</label>
                                    <select id="state" class="select2 form-select" data-allow-clear="true">
                                        <option value="">Select</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="deliveryAdd" checked="" />
                                        <label class="form-check-label" for="deliveryAdd">
                                            Use this as default delivery address
                                        </label>
                                    </div>
                                </div>


                            </div>
                            <hr />
                            <!-- 2. Delivery Type -->
                            <h5 class="my-6">2. Delivery Type</h5>
                            <div class="row gy-3">
                                <div class="col-md">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="customRadioIcon1">
                                  <span class="custom-option-body">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span class="custom-option-title mb-2"> Standard </span>
                                    <small> Delivery in 3-5 days. </small>
                                  </span>
                                            <input
                                                    name="customDeliveryRadioIcon"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioIcon1"
                                                    checked />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="customRadioIcon2">
                                  <span class="custom-option-body">
                                    <i class="bx bx-paper-plane"></i>
                                    <span class="custom-option-title mb-2"> Express </span>
                                    <small>Delivery within 2 days.</small>
                                  </span>
                                            <input
                                                    name="customDeliveryRadioIcon"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioIcon2" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="customRadioIcon3">
                                  <span class="custom-option-body">
                                    <i class="bx bx-crown"></i>
                                    <span class="custom-option-title mb-2"> Overnight </span>
                                    <small> Delivery within a days. </small>
                                  </span>
                                            <input
                                                    name="customDeliveryRadioIcon"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioIcon3" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <!-- 3. Apply Promo code -->
                            <h5 class="my-4">3. Apply Promo code</h5>
                            <div class="row g-4">
                                <div class="col-sm-10 col-8">
                                    <input type="text" class="form-control" placeholder="TAKEITALL" />
                                </div>
                                <div class="col-sm-2 col-4 d-grid">
                                    <button class="btn btn-primary">Apply</button>
                                </div>

                                <div class="divider divider-dashed">
                                    <div class="divider-text">OR</div>
                                </div>

                                <div class="col-12">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between flex-column flex-sm-row">
                                            <div class="offer">
                                                <p class="mb-0 fw-medium">TAKEITALL</p>
                                                <span>Apply this code to get 15% discount on orders above 20$.</span>
                                            </div>
                                            <div class="apply mt-4 mt-sm-0">
                                                <button class="btn btn-outline-primary">Apply</button>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between flex-column flex-sm-row">
                                            <div class="offer">
                                                <p class="mb-0 fw-medium">FESTIVE10</p>
                                                <span>Apply this code to get 10% discount on all orders.</span>
                                            </div>
                                            <div class="apply mt-4 mt-sm-0">
                                                <button class="btn btn-outline-primary">Apply</button>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between flex-column flex-sm-row">
                                            <div class="offer">
                                                <p class="mb-0 fw-medium">MYSTERYDEAL</p>
                                                <span>Apply this code to get discount between 10% - 50%.</span>
                                            </div>
                                            <div class="apply mt-4 mt-sm-0">
                                                <button class="btn btn-outline-primary">Apply</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr />
                            <!-- 4. Payment Method -->
                            <h5 class="my-6">4. Payment Method</h5>
                            <div class="row g-3">
                                <div class="mb-4">
                                    <div class="form-check form-check-inline">
                                        <input
                                                name="collapsible-payment"
                                                class="form-check-input form-check-input-payment"
                                                type="radio"
                                                value="credit-card"
                                                id="collapsible-payment-cc"
                                                checked="" />
                                        <label class="form-check-label" for="collapsible-payment-cc">
                                            Credit/Debit/ATM Card <i class="bx bx-credit-card-alt"></i>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input
                                                name="collapsible-payment"
                                                class="form-check-input form-check-input-payment"
                                                type="radio"
                                                value="cash"
                                                id="collapsible-payment-cash" />
                                        <label class="form-check-label" for="collapsible-payment-cash">
                                            Cash On Delivery
                                            <i
                                                    class="bx bx-help-circle"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="You can pay once you receive the product."></i>
                                        </label>
                                    </div>
                                </div>
                                <div id="form-credit-card">
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label w-100" for="creditCardMask">Card Number</label>
                                            <div class="input-group input-group-merge">
                                                <input
                                                        type="text"
                                                        id="creditCardMask"
                                                        name="creditCardMask"
                                                        class="form-control credit-card-mask"
                                                        placeholder="1356 3215 6548 7898"
                                                        aria-describedby="creditCardMask2" />
                                                <span class="input-group-text cursor-pointer" id="creditCardMask2"
                                                ><span class="card-type"></span
                                                    ></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="collapsible-payment-name">Name</label>
                                                    <input
                                                            type="text"
                                                            id="collapsible-payment-name"
                                                            class="form-control"
                                                            placeholder="John Doe" />
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="mb-4">
                                                    <label class="form-label" for="collapsible-payment-expiry-date">Exp. Date</label>
                                                    <input
                                                            type="text"
                                                            id="collapsible-payment-expiry-date"
                                                            class="form-control expiry-date-mask"
                                                            placeholder="MM/YY" />
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="mb-4">
                                                    <label class="form-label" for="collapsible-payment-cvv">CVV Code</label>
                                                    <div class="input-group input-group-merge">
                                                        <input
                                                                type="text"
                                                                id="collapsible-payment-cvv"
                                                                class="form-control cvv-code-mask"
                                                                maxlength="3"
                                                                placeholder="654" />
                                                        <span class="input-group-text cursor-pointer" id="collapsible-payment-cvv2"
                                                        ><i
                                                                    class="bx bx-help-circle"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Card Verification Value"></i
                                                            ></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sticky Actions -->

<?= $footer; ?>