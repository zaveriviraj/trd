<div class="tab-pane fade" id="list-stone" role="tabpanel" aria-labelledby="list-stone-list">
    <div class="card">
        <div class="card-header">Stone Details</div>
        <div class="card-body">
            <div class="form-group">
                <label>Select Size</label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Sieve Size</th>
                            <th>Size in mm</th>
                            <th>Size in Carat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sizes as $size)
                            <tr>
                                <td>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="size_{{ $loop->index + 1 }}" name="size" class="custom-control-input">
                                        <label class="custom-control-label" for="size_{{ $loop->index + 1 }}"></label>
                                    </div>
                                </td>
                                <td>{{ $size['sieve'] }}</td>
                                <td>{{ $size['mm'] }}</td>
                                <td>{{ $size['carat'] }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="size_other" name="size" class="custom-control-input">
                                    <label class="custom-control-label" for="size_other">Other</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <label for="other_size">Other Size</label>
                <input type="text" class="form-control" id="other_size" placeholder="Any other size not listed in table above">
            </div>
            <div class="form-group">
                <label>Size</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="size_star">
                    <label class="custom-control-label" for="size_star">Stars</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="size_melee">
                    <label class="custom-control-label" for="size_melee">Melee</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="size_carats">
                    <label class="custom-control-label" for="size_carats">Carats</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="size_large">
                    <label class="custom-control-label" for="size_large">Large</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="size_specials">
                    <label class="custom-control-label" for="size_specials">Specials</label>
                </div>
            </div>
            <div class="form-group">
                <label>Shape</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="shape_round">
                    <label class="custom-control-label" for="shape_round">Round</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="shape_curves">
                    <label class="custom-control-label" for="shape_curves">Curves</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="shape_squares">
                    <label class="custom-control-label" for="shape_squares">Squares</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="shape_baguettes">
                    <label class="custom-control-label" for="shape_baguettes">Baguettes</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="shape_pie">
                    <label class="custom-control-label" for="shape_pie">Pie</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="shape_specials">
                    <label class="custom-control-label" for="shape_specials">Specials</label>
                </div>
            </div>
            <div class="form-group">
                <label>Color</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_d-f">
                    <label class="custom-control-label" for="color_d-f">D-F</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_g-h">
                    <label class="custom-control-label" for="color_g-h">G-H</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_i-k">
                    <label class="custom-control-label" for="color_i-k">I-K</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_l-n">
                    <label class="custom-control-label" for="color_l-n">L-N</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_dark">
                    <label class="custom-control-label" for="color_dark">Dark</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_ttlb">
                    <label class="custom-control-label" for="color_ttlb">TTLB</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_tlb">
                    <label class="custom-control-label" for="color_tlb">TLB</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_ttlc">
                    <label class="custom-control-label" for="color_ttlc">TTLC</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_tlc">
                    <label class="custom-control-label" for="color_tlc">TLC</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="color_fc">
                    <label class="custom-control-label" for="color_fc">FC</label>
                </div>
            </div>
            <div class="form-group">
                <label>Clarity</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_if">
                    <label class="custom-control-label" for="clarity_if">IF</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_vvs">
                    <label class="custom-control-label" for="clarity_vvs">VVS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_vs">
                    <label class="custom-control-label" for="clarity_vs">VS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_si">
                    <label class="custom-control-label" for="clarity_si">SI</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_si3">
                    <label class="custom-control-label" for="clarity_si3">SI3</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_i1">
                    <label class="custom-control-label" for="clarity_i1">I1</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="clarity_i2">
                    <label class="custom-control-label" for="clarity_i2">I2</label>
                </div>
            </div>
            <div class="form-group">
                <label>Cut</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cut_xxx">
                    <label class="custom-control-label" for="cut_xxx">XXX</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cut_xvgvg">
                    <label class="custom-control-label" for="cut_xvgvg">XVGVG</label>
                </div>
            </div>
            <div class="form-group">
                <label>Fluorescence</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="fluor_none">
                    <label class="custom-control-label" for="fluor_none">None</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="fluor_faint">
                    <label class="custom-control-label" for="fluor_faint">Faint</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="fluor_medium">
                    <label class="custom-control-label" for="fluor_medium">Medium</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="fluor_strong">
                    <label class="custom-control-label" for="fluor_strong">Strong</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="fluor_very_strong">
                    <label class="custom-control-label" for="fluor_very_strong">Very Strong</label>
                </div>
            </div>
            <div class="form-group">
                <label>Certs</label>
                <br>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_gia">
                    <label class="custom-control-label" for="cert_gia">GIA</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_igi">
                    <label class="custom-control-label" for="cert_igi">IGI</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_iidgr">
                    <label class="custom-control-label" for="cert_iidgr">IIDGR</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_hrd">
                    <label class="custom-control-label" for="cert_hrd">HRD</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_gsi">
                    <label class="custom-control-label" for="cert_gsi">GSI</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_ags">
                    <label class="custom-control-label" for="cert_ags">AGS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input class="custom-control-input" type="checkbox" id="cert_none">
                    <label class="custom-control-label" for="cert_none">None</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="buying_quantity_cts">Buying Quantity (Cts.)</label>
                    <input type="text" class="form-control" id="buying_quantity_cts" placeholder="Enter Buying Quantity in Carats">
                </div>
                <div class="form-group col">
                    <label for="buying_quantity_pcs">Buying Quantity (Pcs.)</label>
                    <input type="text" class="form-control" id="buying_quantity_pcs" placeholder="Enter Buying Quantity in Pieces">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="buying_price_request">Buyer Price Req. ($/ct.)</label>
                    <input type="text" class="form-control" id="buying_price_request" placeholder="Enter Buying Pricing Request">
                </div>
                <div class="form-group col">
                    <label for="buying_offer_ppc">Buyer's offer PPC</label>
                    <input type="text" class="form-control" id="buying_offer_ppc" placeholder="Enter Buying Offer">
                </div>
            </div>
            <div class="form-group">
                <label for="buying_comments">Buying Comments</label>
                <textarea class="form-control" id="buying_comments" placeholder="Enter Buying Comments"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end">
                <a class="btn btn-primary next-tab" href="#">Add Buying Request</a>
            </div>
        </div>
    </div>
</div>