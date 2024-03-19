<x-dashboard-layout>
    <div class="flex flex-wrap gap-5 m-5">
        <div class="p-5 text-center text-white bg-gray-500 border rounded min-w-48">
            <h2 class="text-4xl font-bold">{{ $total_order }}</h2>
            <span>Total Order</span>
        </div>
        <div class="p-5 text-center text-white bg-yellow-400 border rounded min-w-48">
            <h2 class="text-4xl font-bold">{{ $pending_orders }}</h2>
            <span>Pending Orders</span>
        </div>
        <div class="p-5 text-center text-white bg-blue-500 border rounded min-w-48">
            <h2 class="text-4xl font-bold">{{ $confiremed_orders }}</h2>
            <span>Confirmed Orders</span>
        </div>
        <div class="p-5 text-center text-white bg-green-500 border rounded min-w-48 ">
            <h2 class="text-4xl font-bold">{{ $deliveried_orders }}</h2>
            <span>Deliveried Orders</span>
        </div>
        <div class="p-5 text-center text-white bg-red-500 border rounded min-w-48">
            <h2 class="text-4xl font-bold">{{ $canceled_orders }}</h2>
            <span>Canceled Orders</span>
        </div>
        <div class="p-5 text-center border-2 rounded min-w-48 ">
            <h2 class="text-4xl font-bold">{{ $total_product }}</h2>
            <span>Total Product</span>
        </div>
        <div class="p-5 text-center text-white bg-orange-500 border rounded min-w-48">
            <h2 class="text-4xl font-bold">{{ $total_page }}</h2>
            <span>Total Page</span>
        </div>
    </div>
</x-dashboard-layout>
