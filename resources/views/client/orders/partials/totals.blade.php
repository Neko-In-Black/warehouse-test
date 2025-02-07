@php use App\CustomConstants\Fees; @endphp
<div class="mt-4 overflow-x-auto">
    <table id="totals-table" class="min-w-full divide-y divide-gray-200">
        <tbody class="bg-white">
        <tr id="subtotal-row"
            class="border-b {{ $details['hasDiscount'] ? 'line-through' : 'bg-gray-200' }}">
            <td class="px-4 py-2 font-semibold">Subtotal:</td>
            <td class="px-4 py-2 text-right">
                ${{ $details['subtotal'] }}
            </td>
        </tr>
        @if($details['hasDiscount'])
            <tr id="discount-row" class="border-t bg-amber-200">
                <td class="px-4 py-2 font-bold">
                    Subtotal:
                    <p class="text-sm text-gray-400">(with Saturday Discount)</p>
                </td>
                <td class="px-4 py-2 font-bold text-right">
                    ${{ $details['totalBeforeFees'] }}
                </td>
            </tr>
        @endif
        <tr id="tax-row" class="border-b text-sm">
            <td class="px-4 py-2 font-semibold">
                Tax (<span class="fee-rate text-gray-500">{{ Fees::$tax }}%</span>):
            </td>
            <td class="px-4 py-2 text-right">
                ${{ $details['tax'] }}
            </td>
        </tr>
        <tr id="store-fee-row" class="border-b text-sm">
            <td class="px-4 py-2 font-semibold">
                Store Fee (<span
                    class="fee-rate text-gray-500">{{ Fees::$store }}%</span>):
            </td>
            <td class="px-4 py-2 text-right">
                ${{ $details['storeFee'] }}
            </td>
        </tr>
        <tr id="duties-row" class="border-b text-sm">
            <td class="px-4 py-2 font-semibold">
                Custom Duties (<span
                    class="fee-rate text-gray-500">{{ Fees::$duties }}%</span>):
            </td>
            <td class="px-4 py-2 text-right">
                ${{ $details['dutiesFee'] }}
            </td>
        </tr>
        <tr id="total-row" class="border-t text-lg bg-blue-300">
            <td class="px-4 py-2 font-bold">Total:</td>
            <td class="px-4 py-2 font-bold text-right">
                ${{ $details['total'] }}
            </td>
        </tr>
        </tbody>
    </table>
</div>
