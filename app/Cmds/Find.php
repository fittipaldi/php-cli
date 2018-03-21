<?php

namespace Cmds;

use Lib\Binary;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// Add the required classes
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class Hello
 *
 * This is the explication how it is work this program .
 */
class Find extends Command
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
            ->setName('find')
            // the short description"
            ->setHelp('This command run the program -l list, -f item for found')
            // the full command description shown when running the command with
            ->setDescription('This command is the run program ')
            ->setDefinition(
                new InputDefinition(array(
                    new InputOption('list', 'l', InputOption::VALUE_REQUIRED, 'List items', ''),
                    new InputOption('find', 'f', InputOption::VALUE_REQUIRED, 'Item for search', '')
                ))
            );

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
            'Start program',// A line
            '--------------------------',// Another line
            '',// Empty line
        ]);

        $list = $input->getOption('list');
        $find = $input->getOption('find');

        $output->writeln('---------List Param----------');
        $items = explode(',', $list);
        foreach ($items as $k => $i) {
            $output->writeln('[' . $k . '] -> ' . $i);
        }
        $output->writeln('');
        $key = Binary::search($items, $find, true);

        $output->writeln('---------List Param Order ASC----------');
        foreach ($items as $k => $i) {
            $output->writeln('[' . $k . '] -> ' . $i);
        }

        $return = 'Not Found';
        if ($key) {
            $return = '[' . $key . '] -> ' . $items[$key];
        }

        $output->writeln('Result : ' . $return);

    }
}