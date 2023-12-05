@php
    use Carbon\Carbon;
@endphp

@extends('layouts.clients.client')
@section('title')
    Chi tiết khóa học
@endsection

@section('content')
<section>
<div class="bg-light py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
            <h4>Payment Info</h4>
            <div class="shadow-sm bg-white p-4 my-4" style="border: 1px solid lightgray; border-radius: 20px;">
              <h6 class="mb-4">Your Saved Cards</h6>
              <div class="d-flex">
                <div class="shadow cardStyle p-3" style="background-color: black;">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="text-light">VISA</div>
                    <div class="selectBox selected">&#x2713;</div>
                  </div>
                  <div class="my-3">
                    <div><small class="text-secondary">CARD NYUMBER</small></div>
                    <div class="fs-4 text-info">**** **** **** 2288</div>
                  </div>
                  <div class="my-3">
                    <div class='d-flex align-items-center justify-content-between'>
                      <div>
                        <div><small class="text-secondary">CARD HOLDER</small></div>
                        <div class="text-white">John Doe P W</div>
                      </div>
                      <div>
                        <div><small class="text-secondary">EXPIRY</small></div>
                        <div class="text-light">02/28</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ms-4 shadow cardStyle p-3 bg-white ml-4" style="border: 1px solid lightgray;">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="text-secondary">MC</div>
                    <div class="selectBox"></div>
                  </div>
                  <div class="my-3">
                    <div><small class="text-secondary">CARD NYUMBER</small></div>
                    <div class="fs-4 text-dark">**** **** **** 8822</div>
                  </div>
                  <div class="my-3">
                    <div class='d-flex align-items-center justify-content-between'>
                      <div>
                        <div><small class="text-secondary">CARD HOLDER</small></div>
                        <div class="text-dark">John Doe P W</div>
                      </div>
                      <div>
                        <div><small class="text-secondary">EXPIRY</small></div>
                        <div class="text-dark">08/22</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <form action="">
                <div class="col-sm-6 mt-5">
                  <label for="cardName">Name on the card</label>
                  <input type="text" id="cardName" class="form-title my-1">
                </div>
                <div class="col-sm-8 mt-4">
                  <label for="cardNumber">Card Number</label>
                  <input type="text" id="cardNumber" class="form-title my-1">
                </div>
                <div class="row">
                  <div class="col-sm-3 col-xs-6 mt-4">
                    <label for="expiry">Card Expiry (mm/yy)</label>
                    <input type="text" id="expiry" class="form-title my-1">
                  </div>
                  <div class="col-sm-3 col-xs-6 mt-4">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" class="form-title my-1">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-xs-12 mt-4">
                    <label for="insuranceTerm">Choose term</label>
                    <select name="" id="insuranceTerm" class="form-control my-1">
                      <option value="">1 Year</option>
                      <option value="">3 Years</option>
                      <option value="">5 Years</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-xs-6 mt-4">
                    <label for="schedule">Payment Schedule</label>
                    <select name="" id="schedule" class="form-control my-1">
                      <option value="">Quarterly</option>
                      <option value="">Half Yearly</option>
                      <option value="">Full (15% Discount)</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-xs-6 mt-4">
                    <label for="nominee">Nominee Name</label>
                    <input type="text" id="nominee" class="form-title my-1">
                  </div>
                </div>
                <div class="my-3">
                  <small class="text-secondary">I authorize some insurance company to charge my debit / credit card for the total amount of xxx.xx</small>
                </div>
                <div class="mt-5 mb-3">
                  <div class="row">
                    <div class="col">
                      <a href="javascript:goBack()" class="btn btn-outline-secondary w-100">Go Back</a>
                    </div>
                    <div class="col">
                      <button role="button" type="submit" class="btn btn-primary w-100">Charge</button>
                    </div>
                  </div>
                </div>
    
              </form>
    
    
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <h4>Purchase Summary</h4>
            <div class="shadow-sm bg-white p-4 mt-4 mb-3">
              <h5 class="h6"><strong>Policy Info</strong></h5>
              <table class="w-100 mt-3">
                <tr>
                  <td>Policy #</td>
                  <td>:</td>
                  <td><strong class="ms-2">1624-22-88</strong></td>
                </tr>
                <tr>
                  <td>Members</td>
                  <td>:</td>
                  <td><strong class="ms-2">4</strong></td>
                </tr>
              </table>
            </div>
            <div class="shadow-sm bg-white p-4 mb-3">
              <h5 class="h6"><strong>Coverage</strong></h5>
              <table class="w-100 mt-3">
                <tr>
                  <td>Your Coverage</td>
                  <td>:</td>
                  <td><strong class="ms-2">Full</strong></td>
                </tr>
                <tr>
                  <td>Validity</td>
                  <td>:</td>
                  <td><strong class="ms-2">08/22/2022</strong></td>
                </tr>
              </table>
            </div>
    
            <div class="shadow-sm bg-white mb-3">
              <div class="px-4 py-2 bg-danger text-white">
                Discount Valid until : <strong>12:22 mins</strong>
              </div>
              <div class="p-4">
                <h5 class="h6"><strong>Price Breakup</strong></h5>
                <table class="w-100 mt-3">
                  <tr>
                    <td>Reg Price</td>
                    <td>:</td>
                    <td><strong class="ms-2">$11,900</strong></td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>:</td>
                    <td><strong class="ms-2">$1,00</strong></td>
                  </tr>
                  <tr>
                    <td>Discount</td>
                    <td>:</td>
                    <td><strong class="ms-2">$1,000</strong></td>
                  </tr>
                  <tr>
                    <td colspan="3"><hr /></td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td><strong class="ms-2 text-success">$11,000</strong></td>
                  </tr>
                  <tr>
                    <td colspan="3"><hr /></td>
                  </tr>
                </table>
                <div>
                  <div class="text-secondary"><span class="badge bg-secondary me-2">big2022</span> Offer applied</div>
                  <div class="text-secondary my-2">Secure payment</div>
                  <div class="text-secondary">30 day money back gaurantee</div>
                </div>
              </div>
              <div class="p-4 border-top">
                <h6><strong>Do you have a code? <a href="#">Click here</a></strong></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection