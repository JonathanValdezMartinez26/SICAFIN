<?= $header; ?>

    <!-- Collapsible Section -->
    <div class="row my-6">
        <div class="col">
            <h6>Regiones, Sucursales y Coordinaciones</h6>
            <div class="accordion" id="collapsibleSection">
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryAddress" aria-expanded="true" aria-controls="collapseDeliveryAddress">
                            Regiones
                        </button>
                    </h2>
                    <div id="regiones" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-basic table border-top">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Gerente</th>
                                        <th>Supervisor</th>
                                        <th>Salary</th>
                                        <th>Estatus</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryOptions">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"  data-bs-target="#collapseDeliveryOptions"  aria-expanded="false" aria-controls="collapseDeliveryOptions">
                            Sucursales
                        </button>
                    </h2>
                    <div id="collapseDeliveryOptions" class="accordion-collapse collapse" aria-labelledby="headingDeliveryOptions" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-basic table border-top">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Gerente</th>
                                        <th>Supervisor</th>
                                        <th>Salary</th>
                                        <th>Estatus</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingPaymentMethod">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePaymentMethod" aria-expanded="false" aria-controls="collapsePaymentMethod">
                            Coordinaciones
                        </button>
                    </h2>
                    <div id="collapsePaymentMethod" class="accordion-collapse collapse" aria-labelledby="headingPaymentMethod" data-bs-parent="#collapsibleSection">
                        <form>
                            <div class="accordion-body">
                                <div class="mb-6">
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
                                <div id="form-credit-card" class="row">
                                    <div class="col-12 col-md-8 col-xl-6">
                                        <div class="mb-6">
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
                                                <div class="mb-6">
                                                    <label class="form-label" for="collapsible-payment-name">Name</label>
                                                    <input
                                                            type="text"
                                                            id="collapsible-payment-name"
                                                            class="form-control"
                                                            placeholder="John Doe" />
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="mb-6">
                                                    <label class="form-label" for="collapsible-payment-expiry-date">Exp. Date</label>
                                                    <input
                                                            type="text"
                                                            id="collapsible-payment-expiry-date"
                                                            class="form-control expiry-date-mask"
                                                            placeholder="MM/YY" />
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="mb-6">
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
                                                                    class="bx bx-help-circle text-muted"
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
                                <div class="mt-1">
                                    <button type="submit" class="btn btn-primary me-4">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?= $footer; ?>