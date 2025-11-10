<div class="flex items-start p-5 border-l-4 border-blue-700 bg-gradient-to-r from-gray-50 to-blue-50 hover:from-blue-50 hover:to-blue-100 transition-colors rounded-lg shadow-sm">
    <div class="flex-shrink-0 mr-4">
        <div class="bg-gradient-to-r from-blue-700 to-blue-800 p-3 rounded-lg shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
        </div>
    </div>
    <a href="{{ $url }}" class="w-full">
        <div>
            <h3 class="text-lg font-medium text-blue-900">{{ $title }}</h3>
            <p class="mt-1 text-gray-600">{{ $description }}</p>
        </div>
    </a>
</div>
