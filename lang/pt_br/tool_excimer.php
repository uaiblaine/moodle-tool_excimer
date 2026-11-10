<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Portuguese (Brazil) language strings.
 *
 * @package     tool_excimer
 * @copyright   2026 Anderson Blaine
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['adminname'] = 'Perfilador Excimer';
$string['allprofilesdeleted'] = 'Todos os perfis foram excluídos.';
$string['approx_count_algorithm'] = 'algoritmo de contagem aproximada';
$string['auto_settings'] = 'Configurações do perfilamento automático';
$string['auto_settings_desc'] = 'Configurações relacionadas ao perfilamento automático.';
$string['cachedef_page_group_metadata'] = 'Cache de metadados de grupos de páginas do Excimer';
$string['cachedef_request_metadata'] = 'Cache de metadados de requisições do Excimer';
$string['checkslowest'] = 'Perfis do Excimer';
$string['checkslowest:action'] = 'Perfis mais lentos';
$string['checkslowest:details'] = 'O perfil do Excimer de maior duração registrado é o do script/tarefa "{$a->request}", com {$a->duration}.';
$string['checkslowest:none'] = 'Nenhum perfil registrado.';
$string['checkslowest:summary'] = 'O perfil mais lento é "{$a->request}", com {$a->duration}';
$string['clear'] = 'Limpar';
$string['deleteallwarning'] = 'Isso removerá TODOS os perfis armazenados. Os perfis bloqueados não serão removidos. Continuar?';
$string['deletedcourse'] = 'ID do curso excluído: {$a}';
$string['deleteprofile'] = 'Excluir perfil';
$string['deleteprofiles_course'] = 'Excluir todos os perfis do curso';
$string['deleteprofiles_course_warning'] = 'Isso removerá todos os perfis armazenados do curso. Os perfis bloqueados não serão removidos. Continuar?';
$string['deleteprofiles_filter'] = 'Excluir todos os perfis deste filtro';
$string['deleteprofiles_filter_warning'] = 'Isso removerá todos os perfis armazenados que correspondem a este filtro. Os perfis bloqueados não serão removidos. Continuar?';
$string['deleteprofiles_script'] = 'Excluir todos os perfis do script';
$string['deleteprofiles_script_warning'] = 'Isso removerá todos os perfis armazenados do script. Os perfis bloqueados não serão removidos. Continuar?';
$string['deleteprofilewarning'] = 'Isso removerá o perfil. Continuar?';
$string['didnotfinish'] = 'Não terminou';
$string['displaying_month'] = 'Exibindo o mês';
$string['duration'] = 'duração';
$string['edit_lock'] = 'Editar bloqueio';
$string['enable_auto'] = 'Ativar o perfilamento automático';
$string['enable_auto_desc'] = 'Qualquer página será perfilada automaticamente se ultrapassar a duração mínima.';
$string['enable_fuzzy_count'] = 'Ativar a contagem aproximada';
$string['enable_fuzzy_count_desc'] = 'Faz o plugin manter uma contagem aproximada das execuções de página usando o {$a}. O perfilamento automático também deve estar ativado.';
$string['enable_partial_save'] = 'Ativar o salvamento parcial';
$string['enable_partial_save_desc'] = 'Salva perfis parciais dos processos web lentos a cada intervalo de processamento. Isso fornece informações sobre esses processos enquanto ainda estão em execução ou caso um contêiner seja encerrado, mas as gravações extras podem ser problemáticas em caso de problemas de banco de dados em grande escala.';
$string['expiry_fuzzy_counts'] = 'Meses para manter os dados de contagem aproximada.';
$string['expiry_fuzzy_counts_desc'] = 'O número de meses completos de dados a manter. Deixe em branco para manter indefinidamente.';
$string['expiry_s'] = 'Expiração dos registros (dias)';
$string['expiry_s_desc'] = 'Remove os perfis após este período.';
$string['export_profile'] = 'Exportar perfil';
$string['field_actions'] = 'Ações';
$string['field_buffering'] = 'Buffer ativado';
$string['field_contenttype'] = 'Tipo de conteúdo';
$string['field_contenttypecategory'] = 'Tipo de conteúdo (categoria)';
$string['field_contenttypekey'] = 'Tipo de conteúdo (extensão/chave)';
$string['field_contenttypevalue'] = 'Tipo de conteúdo (valor real)';
$string['field_cookies'] = 'Cookies ativados';
$string['field_courseid'] = 'Curso';
$string['field_cpuduration'] = 'Duração de CPU (total)';
$string['field_created'] = 'Criado';
$string['field_datasize'] = 'Tamanho dos dados do perfil';
$string['field_dbreadwrites'] = 'Leituras/gravações no BD';
$string['field_dbreplicareads'] = 'Leituras no BD da réplica';
$string['field_duration'] = 'Duração';
$string['field_estimatedduration'] = 'Duração est. (s)';
$string['field_explanation'] = 'Explicação';
$string['field_finished'] = 'Concluído';
$string['field_fuzzycount'] = 'Contagem aprox.';
$string['field_fuzzydurationcounts'] = 'Histograma';
$string['field_fuzzydurationsum'] = 'Duração total aprox. (s)';
$string['field_hostname'] = 'Nome do host';
$string['field_id'] = 'ID';
$string['field_lockheld'] = 'Sessão retida';
$string['field_lockreason'] = 'Motivo do bloqueio';
$string['field_lockwait'] = 'Espera da sessão';
$string['field_lockwaiturl'] = 'URL bloqueadora';
$string['field_lockwaiturl_help'] = 'As informações sobre esta página só podem estar disponíveis quando $CFG->debugsessionlock está definido.';
$string['field_maxcreated'] = 'Mais recente';
$string['field_maxduration'] = 'Mais lento';
$string['field_maxlockheld'] = 'Mais longo';
$string['field_memoryusagemax'] = 'Máx. de memória usada';
$string['field_mincreated'] = 'Mais antigo';
$string['field_minduration'] = 'Mais rápido';
$string['field_minlockheld'] = 'Mais curto';
$string['field_month'] = 'Mês';
$string['field_name'] = 'Nome';
$string['field_numsamples'] = 'Número de amostras';
$string['field_numsamples_value'] = '{$a->samples} amostras a ~{$a->samplerate} ms';
$string['field_parameters'] = 'Parâmetros';
$string['field_pathinfo'] = 'Pathinfo';
$string['field_pid'] = 'ID do processo';
$string['field_reason'] = 'Motivo';
$string['field_referer'] = 'Referer';
$string['field_request'] = 'Requisição';
$string['field_requestcount'] = 'Nº de perfis';
$string['field_responsecode'] = 'Código';
$string['field_scriptgroup'] = 'Grupo de scripts';
$string['field_scripttype'] = 'Tipo de script';
$string['field_sessionid'] = 'ID da sessão';
$string['field_systemcpuduration'] = 'Duração de CPU do sistema';
$string['field_timecreated'] = 'Data de criação';
$string['field_timemodified'] = 'Data de modificação';
$string['field_type'] = 'Tipo';
$string['field_useragent'] = 'User agent';
$string['field_usercpuduration'] = 'Duração de CPU do usuário';
$string['field_userid'] = 'Usuário';
$string['field_usermodified'] = 'Usuário que modificou';
$string['field_versionhash'] = 'Hash da versão';
$string['filter_url_placeholder'] = 'Filtrar por URL…';
$string['fuzzydurationrange'] = '{$a->low} - {$a->high} s';
$string['general_settings'] = 'Configurações gerais';
$string['general_settings_desc'] = 'Configurações relacionadas a todos os perfis.';
$string['here'] = 'aqui';
$string['histogram_history'] = 'Histórico do histograma';
$string['import_error'] = 'Erro ao salvar o conteúdo do arquivo importado.';
$string['import_profile'] = 'Importar perfil';
$string['import_success'] = 'Perfil importado com sucesso.';
$string['link'] = 'Link direto';
$string['lock_profile'] = 'Bloquear perfil';
$string['locked'] = 'O perfil está bloqueado';
$string['locked_by'] = 'O perfil está bloqueado por {$a}';
$string['lockedinfo'] = 'Bloqueado por {$a->user} em {$a->date}';
$string['lockedprofiles_count'] = '{$a} perfil(is) bloqueado(s)';
$string['lockreason'] = 'Motivo do bloqueio do perfil';
$string['lockreason_help'] = 'Informar um texto impedirá que este perfil seja excluído. Ele não será removido pelas tarefas de limpeza nem poderá ser excluído manualmente (também será excluído das exclusões em grupo). Normalmente você informaria o motivo pelo qual deseja manter este perfil. Limpar esta caixa permitirá que o perfil seja excluído.';
$string['lockwaitnotification'] = 'A maior parte da duração foi gasta aguardando um bloqueio de sessão; a página pode não ser lenta.';
$string['long_interval_s'] = 'Intervalo de processamento (segundos)';
$string['long_interval_s_desc'] = 'Verifica o estado atual das tarefas de longa duração a cada N segundos e processa conforme necessário. Isso inclui salvar os perfis das tarefas do cron concluídas e os salvamentos parciais dos processos web em andamento, se ativados.';
$string['months_to_display'] = 'Meses a exibir';
$string['next_month'] = 'Próximo mês';
$string['no_month_in_page_group_table'] = 'Valor do mês não definido na tabela de grupos de páginas.';
$string['no_profile_file'] = 'Nenhum arquivo de perfil encontrado.';
$string['noexcimerprofiler'] = 'A classe ExcimerProfiler não existe, portanto o perfilamento não pode continuar. Consulte as instruções de instalação {$a}.';
$string['num_slowest'] = 'Máximo a salvar';
$string['num_slowest_by_page'] = 'Máximo a salvar por página';
$string['num_slowest_by_page_desc'] = 'Somente os N perfis mais lentos serão mantidos para cada página de script.';
$string['num_slowest_desc'] = 'Somente os N perfis mais lentos serão mantidos.';
$string['period_ms'] = 'Período de amostragem (milissegundos)';
$string['period_ms_desc'] = 'Frequência da amostragem. O mínimo é {$a->min} e o máximo é {$a->max}.';
$string['pluginname'] = 'Perfilador Excimer';
$string['previous_month'] = 'Mês anterior';
$string['privacy:metadata:tool_excimer_profiles'] = 'Excimer';
$string['profile_file'] = 'Arquivo de perfil';
$string['profile_updated'] = 'Perfil atualizado';
$string['profiledeleted'] = 'O perfil foi excluído.';
$string['profilesdeleted'] = 'Os perfis foram excluídos';
$string['reason_auto'] = 'Automático';
$string['reason_flameall'] = 'Gráfico de chamas (todas)';
$string['reason_flameme'] = 'Gráfico de chamas (eu)';
$string['reason_import'] = 'Importação';
$string['reason_slow'] = 'Lenta';
$string['reason_stack'] = 'Recursão';
$string['recent'] = 'Recentes';
$string['redact_params'] = 'Parâmetros a serem omitidos';
$string['redact_params_desc'] = 'Os valores destes parâmetros (um por linha) serão removidos antes de o perfil ser salvo. Inclua nesta lista os parâmetros potencialmente sensíveis, como chaves, tokens e nonces. Comentários no estilo C (/\*..\*/) e no estilo bash (#) e linhas em branco serão ignorados.<br/> A omissão dos parâmetros {$a} é nativa e sempre será feita.';
$string['report_page_groups'] = 'Metadados de grupos de páginas';
$string['report_page_slow_course'] = 'Lentas por curso';
$string['report_recent'] = 'Perfilados recentemente';
$string['report_session_locks'] = 'Bloqueios de sessão longos';
$string['report_slowest'] = 'Perfis mais lentos';
$string['report_slowest_grouped'] = 'Scripts mais lentos';
$string['report_slowest_other'] = 'Tarefas / CLI / WS lentos';
$string['report_slowest_web'] = 'Páginas web lentas';
$string['report_unfinished'] = 'Em perfilamento';
$string['reportname'] = 'Relatórios do perfilador';
$string['request_ms'] = 'Duração mínima da requisição (milissegundos)';
$string['request_ms_desc'] = 'Registra um perfil somente se a execução durar pelo menos este tempo.';
$string['samplelimit'] = 'Limite de amostras';
$string['samplelimit_desc'] = 'O número máximo de amostras que serão registradas. Funciona filtrando o registro de amostras. Cada vez que o limite é atingido, as amostras registradas até então perdem uma a cada duas. Além disso, a taxa do filtro dobra, de modo que somente uma a cada N amostras é registrada na taxa de filtro N. Isso tem o mesmo efeito que ajustar o período de amostragem para que o total de amostras nunca exceda o limite.';
$string['samples'] = 'amostras';
$string['scripttype_ajax'] = 'Ajax';
$string['scripttype_cli'] = 'CLI';
$string['scripttype_task'] = 'Tarefa';
$string['scripttype_web'] = 'Web';
$string['scripttype_ws'] = 'Serviço';
$string['slowest'] = 'Mais lentos';
$string['slowest_grouped'] = 'Scripts mais lentos';
$string['stacklimit'] = 'Limite da pilha';
$string['stacklimit_desc'] = 'A recursão ou profundidade de pilha máxima permitida antes de a tarefa ser sinalizada.';
$string['strftime_datetime'] = '%d %b %Y, %H:%M';
$string['strftime_monyear'] = '%b %Y';
$string['tab_import'] = 'Importar';
$string['tab_page_course'] = 'Cursos';
$string['tab_page_groups'] = 'Grupos de páginas';
$string['tab_session_locks'] = 'Bloqueios de sessão longos';
$string['tab_slowest_other'] = 'Tarefas / CLI / WS lentos';
$string['tab_slowest_web'] = 'Páginas web lentas';
$string['task_expire_logs'] = 'Expirar os registros do Excimer';
$string['task_min_duration'] = 'Duração mínima da tarefa (segundos)';
$string['task_min_duration_desc'] = 'Para tarefas agendadas e ad hoc, a duração aproximada mínima, em segundos.';
$string['task_purge_fastest'] = 'Limpar os perfis mais rápidos do Excimer';
$string['task_purge_page_groups'] = 'Limpar os dados de contagem aproximada de grupos de páginas';
$string['term_profile'] = 'Perfil';
$string['to_current_month'] = 'Ir para o mês atual';
$string['unfinished'] = 'Não concluídos';
$string['unknown'] = 'Desconhecido';
