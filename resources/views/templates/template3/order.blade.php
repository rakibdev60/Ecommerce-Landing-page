 <div class="max-w-screen-lg mx-auto" id="order_id">
     <form action="{{ route('admin.orders.store') }}" method="post">
         @csrf
         <input type="hidden" name="products[{{ $product->id }}]" value="{{ $product->id }}">
         <input type="hidden" name="products[{{ $product->id }}][name]" value="{{ $product->name }}">
         <input type="hidden" name="products[{{ $product->id }}][price]" value="{{ $product->price }}">
         <div class="my-5 font-bold text-center text-red-600 md:text-3xl">
             <h2 class="mb-5">অর্ডার করতে নিচের ফর্মটি সঠিক ভাবে পুরন করুন।</h2>
             <h2 class="mb-5">ফোনে অর্ডার করুন {{ $page->data['mobile1'] }}</h2>
             <h2 class="mb-5">ফোনে অর্ডার করুন {{ $page->data['mobile2'] }}</h2>
         </div>

         @if (array_key_exists('name', $product->attributes))
             @foreach ($product->attributes['name'] as $key => $value)
                 <h4 class="m-5 font-bold">{{ $value }} নির্বাচন করুন</h1>
                     <div class="grid grid-cols-2 gap-5 mx-5">
                         @foreach ($product->attributes['value'][$key] as $key2 => $value2)
                             <div class="flex items-center border border-gray-200 rounded ps-4 dark:border-gray-700">
                                 <input required id="{{ $value . $value2 }}" type="radio"
                                     value="{{ $value2 }}"
                                     name="products[{{ $product->id }}][attributes][{{ $value }}]"
                                     class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                 <label for="{{ $value . $value2 }}"
                                     class="w-full py-4 mb-0 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                     <img class="inline max-h-10" src="/storage/{{ $product->attributes['image'][$key][$key2] ?? "" }}" alt=""
                                     srcset="">
                                     <span> {{ $value2 }}</span>
                                    </label>
                             </div>
                         @endforeach
                     </div>
             @endforeach
         @endif

         <div class="grid gap-5 mx-5 my-5 md:grid-cols-2">
             <div>
                 <h4 class="my-5 font-bold">Billing details</h4>
                 <div class="mb-5">
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার
                         নাম</label>
                     <input type="text"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         name="billing_details[name]" />
                 </div>
                 <div class="mb-5">
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার
                         ঠিকানা</label>
                     <input type="text"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         name="billing_details[address]" />
                 </div>
                 <div class="mb-5">
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">মোবাইল
                         নাম্বার</label>
                     <input type="text" name="billing_details[mobile]"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                 </div>
                 <div class="mb-5">
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                     <input type="number" id="quantity" onchange="total()"
                         name="products[{{ $product->id }}][quantity]" value="1"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                 </div>
             </div>
             <div>
                 <h4 class="my-5 font-bold">Your order</h4>
                 <div class="flex justify-between pb-3 border-b border-dashed">
                     <div>Product</div>
                     <div>Subtotal</div>
                 </div>
                 <div class="flex justify-between pb-3 border-b border-dashed">
                     <div>
                         <img class="inline me-5" src="storage/{{ $product->image }}" width="50">
                         <span>{{ $product->name }}</span>
                     </div>
                     <div id="sub_total">
                     </div>
                 </div>
                 <div class="flex justify-between pb-3 border-b border-dashed">
                     <div>Shipping</div>
                     <div>
                         <div class="flex items-center">
                             <input type="radio" name="delivery_charge" value="150" onchange="total()"
                                 class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                             <label for="default-radio-1"
                                 class="mb-0 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">ঢাকার
                                 বাহিরে : Tk 150.00</label>
                         </div>
                         <div class="flex items-center">
                             <input type="radio" name="delivery_charge" value="80" checked onchange="total()"
                                 class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                             <label for="default-radio-1"
                                 class="mb-0 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">ঢাকার
                                 ভিতরে: Tk 80.00</label>
                         </div>
                     </div>
                 </div>
                 <div class="flex justify-between pb-5">
                     <div class="font-bold">Total</div>
                     <div class="font-bold" id="total">Tk 00</div>
                 </div>
                 <div class="py-5 text-center bg-gray-200">
                     ক্যাশঅন ডেলিভারি
                 </div>
                 <div>
                     <button type="submit"
                         class="w-full px-5 py-5 my-5 mb-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Place
                         Order</button>
                 </div>
             </div>
         </div>
     </form>


     <script>
         function total() {
             const price = {{ $product->price }};
             const quantity = document.getElementById('quantity').value;
             const sub_total = document.getElementById('sub_total');
             const total = document.getElementById('total');
             const delivery_charge = document.querySelector('input[name="delivery_charge"]:checked').value;

             sub_total.innerText = quantity + " x {{ $product->price }} = " + (quantity * {{ $product->price }});
             total.innerText = "Tk : " + (Number(quantity * price) + Number(delivery_charge));
         }

         total()
     </script>
 </div>
