require 'fileutils'

# Default task
task default: %w[help]

# Show help
desc 'Show this help message'
task :help do
  puts 'Available tasks:'
  puts '  rake help          # Show this help message'
  puts '  rake serve         # Start the development server'
  puts '  rake publish       # Publish the site to the server (implement as needed)'
  puts '  rake test          # Run the test suite'
end

# Start development server
desc 'Start the development server'
task :serve do
  port = ENV['PORT'] || 8000
  puts "Starting development server on http://localhost:#{port}"
  puts 'Press Ctrl+C to stop the server'

  # Start PHP built-in server
  system("php", "-S", "localhost:#{port}", "-t", "./public/")
end

# Publish the site (stub - implement based on your deployment method)
desc 'Publish the site to the server'
task :publish do
  puts 'Publishing site...'
  # This is a stub - implement your deployment method here
  # Example: rsync, git push, FTP, etc.
  # You might want to add configuration for server details
  puts 'Insert rsync command here'
  puts 'Site published successfully!'
end

# Run tests
desc 'Run the test suite'
task :test do
  puts 'Running tests...'

  # Look for test files
  test_files = Dir.glob('tests/**/*.php') + Dir.glob('test/**/*.php') + Dir.glob('*_test.php') + Dir.glob('**/*_test.php')

  if test_files.empty?
    puts 'No test files found'
    puts 'To run tests, create PHP files with test logic'
    exit 0
  end

  # Run each test file
  test_files.each do |test_file|
    puts "Running #{test_file}..."
    result = system("php", test_file)
    unless result
      puts "Test #{test_file} failed!"
      exit 1
    end
  end

  puts 'All tests passed!'
end