<?php

namespace Cmds;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Hello
 *
 * This is the explication how it is work this program .
 */
class Hello extends Command
{

    /**
     * Register command.
     *
     * @return void
     */
    protected function configure()
    {
        $this
            // the name of the command (the part after "php mycli")
            ->setName('hello')
            // the short description"
            ->setHelp("This command welcome the program")
            // the full command description shown when running the command with
            ->setDescription('Print description about the program.');
    }

    /**
     * Execute command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'This program was create for send a list of numbers and search one number',// A line
            '-----------------------------------------------------------------',// Another line
            'Commands: ',// Another line
            ' find -l {value of list} -f {item for search}',// Another line
        ]);
    }
}