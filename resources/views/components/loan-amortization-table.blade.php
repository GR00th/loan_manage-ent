@props(['loan'])

<div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
    <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">LOAN AMORTIZATION SCHEDULE</h2>
    <div class="overflow-x-auto relative">
        @php
            $initialBalance = $loan->principal_amount;
            $interestRate = $loan->interest_rate / 100;
            $duration = intval($loan->loan_duration);
            $scheduledPayment = $loan->repayment_amount / $duration;
            $releaseDate = \Carbon\Carbon::parse($loan->loan_release_date);
            $repayments = $loan->repayments()->orderBy('created_at')->get();
            $currentDate = \Carbon\Carbon::now();
        @endphp

        <table class="w-full text-sm text-left">
            <thead>
                <tr class="bg-primary-600 dark:bg-primary-700">
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white whitespace-nowrap">
                        Payment No.
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white whitespace-nowrap">
                        Payment Date
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white text-right whitespace-nowrap">
                        Initial Balance
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white text-right whitespace-nowrap">
                        Scheduled Payment
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white text-right whitespace-nowrap">
                        Interest
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white text-right whitespace-nowrap">
                        Principal
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white text-right whitespace-nowrap">
                        Ending Balance
                    </th>
                    <th scope="col" class="py-3 px-4 font-semibold text-white dark:text-white text-center whitespace-nowrap">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900">
                @for ($i = 1; $i <= $duration; $i++)
                    @php
                        $paymentDate = $releaseDate->copy()->addMonths($i);
                        $interest = $initialBalance * ($interestRate / 12);
                        $principal = $scheduledPayment - $interest;
                        $endingBalance = max(0, $initialBalance - $principal);
                        
                        // Check payment status
                        $paymentStatus = 'PENDING';
                        $rowClass = 'bg-white hover:bg-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800';
                        $statusClass = 'text-gray-600 bg-gray-100 dark:text-gray-300 dark:bg-gray-700';
                        
                        if ($currentDate->gt($paymentDate)) {
                            $monthPayment = $repayments->first(function($repayment) use ($paymentDate) {
                                $repaymentDate = \Carbon\Carbon::parse($repayment->created_at);
                                return $repaymentDate->format('Y-m') === $paymentDate->format('Y-m');
                            });
                            
                            if ($monthPayment && $monthPayment->payments >= $scheduledPayment) {
                                $paymentStatus = 'PAID';
                                $rowClass = 'bg-green-50 hover:bg-green-100 dark:bg-green-900/20 dark:hover:bg-green-900/30';
                                $statusClass = 'text-green-700 bg-green-100 dark:text-green-400 dark:bg-green-900/40';
                            } else {
                                $paymentStatus = 'OVERDUE';
                                $rowClass = 'bg-red-50 hover:bg-red-100 dark:bg-red-900/20 dark:hover:bg-red-900/30';
                                $statusClass = 'text-red-700 bg-red-100 dark:text-red-400 dark:bg-red-900/40';
                            }
                        }
                    @endphp
                    <tr class="{{ $rowClass }} border-b border-gray-200 dark:border-gray-700">
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200">
                            {{ $i }}
                        </td>
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200">
                            {{ $paymentDate->format('d/m/Y') }}
                        </td>
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200 text-right">
                            {{ number_format($initialBalance, 2) }}
                        </td>
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200 text-right">
                            {{ number_format($scheduledPayment, 2) }}
                        </td>
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200 text-right">
                            {{ number_format($interest, 2) }}
                        </td>
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200 text-right">
                            {{ number_format($principal, 2) }}
                        </td>
                        <td class="py-3 px-4 text-gray-900 dark:text-gray-200 text-right">
                            {{ number_format($endingBalance, 2) }}
                        </td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 text-xs font-medium rounded-full {{ $statusClass }} flex items-center justify-center">
                                {{ $paymentStatus }}
                            </span>
                        </td>
                    </tr>
                    @php
                        $initialBalance = $endingBalance;
                    @endphp
                @endfor
            </tbody>
        </table>
    </div>
</div> 